<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test email functionality';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email') ?? 'info@altermedrcm.com';

        $testData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '+1-234-567-8900',
            'subject' => 'Test Email',
            'message' => 'This is a test email to verify the contact form email functionality is working correctly.'
        ];

        $this->info('Sending test email to: ' . $email);
        $this->info('Test data: ' . json_encode($testData, JSON_PRETTY_PRINT));

        // Show current mail configuration
        $this->info('Current Mail Configuration:');
        $this->info('MAIL_MAILER: ' . env('MAIL_MAILER'));
        $this->info('MAIL_HOST: ' . env('MAIL_HOST'));
        $this->info('MAIL_PORT: ' . env('MAIL_PORT'));
        $this->info('MAIL_USERNAME: ' . env('MAIL_USERNAME'));
        $this->info('MAIL_ENCRYPTION: ' . env('MAIL_ENCRYPTION'));
        $this->info('MAIL_FROM_ADDRESS: ' . env('MAIL_FROM_ADDRESS'));

        // Also show config values
        $this->info('Config values:');
        $this->info('Config MAIL_MAILER: ' . config('mail.default'));
        $this->info('Config MAIL_HOST: ' . config('mail.mailers.smtp.host'));
        $this->info('Config MAIL_PORT: ' . config('mail.mailers.smtp.port'));
        $this->info('Config MAIL_ENCRYPTION: ' . config('mail.mailers.smtp.encryption'));

        try {
            $result = Mail::to($email)->send(new ContactFormMail($testData));
            $this->info('✅ Email sent successfully!');
            $this->info('Result: ' . json_encode($result));

            // Check Laravel log for more details
            $this->info('Check storage/logs/laravel.log for detailed logs');

        } catch (\Exception $e) {
            $this->error('❌ Email failed to send!');
            $this->error('Error: ' . $e->getMessage());
            $this->error('Error Code: ' . $e->getCode());
            $this->error('File: ' . $e->getFile() . ':' . $e->getLine());
            $this->error('Check your SMTP configuration in .env file');
            $this->error('Make sure:');
            $this->error('1. Gmail 2FA is enabled');
            $this->error('2. App password is correct');
            $this->error('3. Less secure apps access is enabled (if needed)');
        }
    }
}
