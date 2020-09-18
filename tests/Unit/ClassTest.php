<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Article;
use App\Mail\ConfirmationMail;

class ClassTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testClassArticleHasAttribute()
    {
        $this->assertClassHasAttribute('primaryKey', Article::class);
    }

    public function testClassConfirmationMailCreatesInstance()
    {
        $fakeRequest = [
            'first-name' => 'Jorge',
            'last-name' => 'García',
            'age' => 33,
            'email' => 'jorge@mail.com',
            'subject' => 'Dummy subject with a minimum of 55 characters as required.',
        ];

        $email = new ConfirmationMail($fakeRequest);
        $emails = array(
            1 => $email
        );
        
        $this->assertContainsOnlyInstancesOf(ConfirmationMail::class, $emails);
    }
}
