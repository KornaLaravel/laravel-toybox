<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Enumerations\Role;

use function Laravel\Prompts\password;
use function Laravel\Prompts\text;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates an administrative user';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = text(
            label: 'What is your name?',
            required: true
        );
        $email = text(
            label: 'What is your email?',
            required: true
        );
        $password = password(
            label: 'What is your password?',
            placeholder: 'Minimum 8 characters...',
            required: true
        );
        User::firstOrCreate(
            [
                'email' => $email,
            ],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'email_verified_at' => now(),
                'role' => Role::ADMIN,
            ]
        );
        $this->info('Successfully created user - you may now log in at /admin and access Pulse at /pulse');
    }
}
