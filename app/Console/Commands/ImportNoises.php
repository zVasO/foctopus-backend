<?php

namespace App\Console\Commands;

use App\Models\Noise;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ImportNoises extends Command
{
    public const NOISE_FOLDER = 'import' . DIRECTORY_SEPARATOR . 'noises';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:noises';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $sourcePath = base_path(self::NOISE_FOLDER);
        $destinationPath = public_path('assets/noises');

        if (!File::exists($sourcePath)) {
            $this->error("Le dossier source $sourcePath n'existe pas.");
            return;
        }

        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }

        $files = File::files($sourcePath);
        foreach ($files as $file) {
            $fileName = $file->getFilename();
            $fileNameWithoutExtension = $file->getFilenameWithoutExtension();
            $newPath = $destinationPath . '/' . $fileName;

            $fileGotMovedWithSuccess = File::move($file->getPathname(), $newPath);

            if ($fileGotMovedWithSuccess) {
                $assetUrl = env('ASSET_URL', config('app.url') . '/assets');
                $publicLink = $assetUrl . '/noises/' . $fileName;

                Noise::createOrFirst([
                    'name' => $fileNameWithoutExtension,
                    'audio_file_path' => $publicLink,
                    'icon_svg_file_path' => $assetUrl . '/svg/' . $fileNameWithoutExtension . '.svg',
                ]);

                $this->info("File move with success : $publicLink");
            } else {
                $this->error('An error has occured while moving the file.');
            }
        }
    }
}
