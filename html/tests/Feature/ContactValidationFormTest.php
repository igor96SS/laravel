<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactValidationFormTest extends TestCase
{
 

     /* All tests should fail
        Insert Data is wrong on purposes */

    public function test_name_is_required(): void
    {
        $response = $this->post('/contacts', [
            'email' => 'diane@example.com',
            'contact' => '111111111',
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_name_size(): void
    {
        $response = $this->post('/contacts', [
            'name' => 'diane',
            'email' => 'diane@example.com',
            'contact' => '111111111',
        ]);

        $response->assertSessionHasErrors('name');
    }

    public function test_email_is_required()
    {
        $response = $this->post('/contacts', [
            'name' => 'Diane Test',
            'contact' => '111111111',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_email_is_valid()
    {
        $response = $this->post('/contacts', [
            'name' => 'Diane Test',
            'email' => 'diane.email',
            'contact' => '111111111',
        ]);

        $response->assertSessionHasErrors('email');
    }

    public function test_contact_is_required()
    {
        $response = $this->post('/contacts', [
            'name' => 'Diane Test',
            'email' => 'diane@example.com',
        ]);

        $response->assertSessionHasErrors('contact');
    }
}
