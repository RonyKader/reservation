<?php

namespace Tests\Feature;

use App\Enums\Role;
use App\Models\Company;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyUserTest extends TestCase
{

    public function test_admin_can_access_company_users_page()
    {
        $company = Company::factory()->create();
        $user = User::factory()->admin()->create();
        $response = $this->actingAs($user)->post(route('companies.users.store', $company->id, $user->id), [
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => 'password',
//            'role_id' => Role::COMPANY_OWNER->value
        ]);

        $response->assertRedirect(route('companies.users.index', $company->id));
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
           'name' => 'Update Users',
           'email' => 'test@gmail.com'
        ]);
    }
}
