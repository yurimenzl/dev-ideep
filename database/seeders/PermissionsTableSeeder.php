<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'recruit_management_access',
            ],
            [
                'id'    => 19,
                'title' => 'selection_management_access',
            ],
            [
                'id'    => 20,
                'title' => 'development_management_access',
            ],
            [
                'id'    => 21,
                'title' => 'performance_management_access',
            ],
            [
                'id'    => 22,
                'title' => 'company_management_access',
            ],
            [
                'id'    => 23,
                'title' => 'partner_management_access',
            ],
            [
                'id'    => 24,
                'title' => 'company_create',
            ],
            [
                'id'    => 25,
                'title' => 'company_edit',
            ],
            [
                'id'    => 26,
                'title' => 'company_show',
            ],
            [
                'id'    => 27,
                'title' => 'company_delete',
            ],
            [
                'id'    => 28,
                'title' => 'company_access',
            ],
            [
                'id'    => 29,
                'title' => 'colaborator_create',
            ],
            [
                'id'    => 30,
                'title' => 'colaborator_edit',
            ],
            [
                'id'    => 31,
                'title' => 'colaborator_show',
            ],
            [
                'id'    => 32,
                'title' => 'colaborator_delete',
            ],
            [
                'id'    => 33,
                'title' => 'colaborator_access',
            ],
            [
                'id'    => 34,
                'title' => 'test_create',
            ],
            [
                'id'    => 35,
                'title' => 'test_edit',
            ],
            [
                'id'    => 36,
                'title' => 'test_show',
            ],
            [
                'id'    => 37,
                'title' => 'test_delete',
            ],
            [
                'id'    => 38,
                'title' => 'test_access',
            ],
            [
                'id'    => 39,
                'title' => 'form_answer_create',
            ],
            [
                'id'    => 40,
                'title' => 'form_answer_edit',
            ],
            [
                'id'    => 41,
                'title' => 'form_answer_show',
            ],
            [
                'id'    => 42,
                'title' => 'form_answer_delete',
            ],
            [
                'id'    => 43,
                'title' => 'form_answer_access',
            ],
            [
                'id'    => 44,
                'title' => 'test_question_create',
            ],
            [
                'id'    => 45,
                'title' => 'test_question_edit',
            ],
            [
                'id'    => 46,
                'title' => 'test_question_show',
            ],
            [
                'id'    => 47,
                'title' => 'test_question_delete',
            ],
            [
                'id'    => 48,
                'title' => 'test_question_access',
            ],
            [
                'id'    => 49,
                'title' => 'suporte_access',
            ],
            [
                'id'    => 50,
                'title' => 'prova_access',
            ],
            [
                'id'    => 51,
                'title' => 'country_create',
            ],
            [
                'id'    => 52,
                'title' => 'country_edit',
            ],
            [
                'id'    => 53,
                'title' => 'country_show',
            ],
            [
                'id'    => 54,
                'title' => 'country_delete',
            ],
            [
                'id'    => 55,
                'title' => 'country_access',
            ],
            [
                'id'    => 56,
                'title' => 'city_create',
            ],
            [
                'id'    => 57,
                'title' => 'city_edit',
            ],
            [
                'id'    => 58,
                'title' => 'city_show',
            ],
            [
                'id'    => 59,
                'title' => 'city_delete',
            ],
            [
                'id'    => 60,
                'title' => 'city_access',
            ],
            [
                'id'    => 61,
                'title' => 'profile_create',
            ],
            [
                'id'    => 62,
                'title' => 'profile_edit',
            ],
            [
                'id'    => 63,
                'title' => 'profile_show',
            ],
            [
                'id'    => 64,
                'title' => 'profile_delete',
            ],
            [
                'id'    => 65,
                'title' => 'profile_access',
            ],
            [
                'id'    => 66,
                'title' => 'profile_data_create',
            ],
            [
                'id'    => 67,
                'title' => 'profile_data_edit',
            ],
            [
                'id'    => 68,
                'title' => 'profile_data_show',
            ],
            [
                'id'    => 69,
                'title' => 'profile_data_delete',
            ],
            [
                'id'    => 70,
                'title' => 'profile_data_access',
            ],
            [
                'id'    => 71,
                'title' => 'position_create',
            ],
            [
                'id'    => 72,
                'title' => 'position_edit',
            ],
            [
                'id'    => 73,
                'title' => 'position_show',
            ],
            [
                'id'    => 74,
                'title' => 'position_delete',
            ],
            [
                'id'    => 75,
                'title' => 'position_access',
            ],
            [
                'id'    => 76,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 77,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 78,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 79,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 80,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 81,
                'title' => 'currency_plan_create',
            ],
            [
                'id'    => 82,
                'title' => 'currency_plan_edit',
            ],
            [
                'id'    => 83,
                'title' => 'currency_plan_show',
            ],
            [
                'id'    => 84,
                'title' => 'currency_plan_delete',
            ],
            [
                'id'    => 85,
                'title' => 'currency_plan_access',
            ],
            [
                'id'    => 86,
                'title' => 'form_question_create',
            ],
            [
                'id'    => 87,
                'title' => 'form_question_edit',
            ],
            [
                'id'    => 88,
                'title' => 'form_question_show',
            ],
            [
                'id'    => 89,
                'title' => 'form_question_delete',
            ],
            [
                'id'    => 90,
                'title' => 'form_question_access',
            ],
            [
                'id'    => 91,
                'title' => 'form_create',
            ],
            [
                'id'    => 92,
                'title' => 'form_edit',
            ],
            [
                'id'    => 93,
                'title' => 'form_show',
            ],
            [
                'id'    => 94,
                'title' => 'form_delete',
            ],
            [
                'id'    => 95,
                'title' => 'form_access',
            ],
            [
                'id'    => 96,
                'title' => 'position_compatibility_create',
            ],
            [
                'id'    => 97,
                'title' => 'position_compatibility_edit',
            ],
            [
                'id'    => 98,
                'title' => 'position_compatibility_show',
            ],
            [
                'id'    => 99,
                'title' => 'position_compatibility_delete',
            ],
            [
                'id'    => 100,
                'title' => 'position_compatibility_access',
            ],
            [
                'id'    => 101,
                'title' => 'people_compatibility_create',
            ],
            [
                'id'    => 102,
                'title' => 'people_compatibility_edit',
            ],
            [
                'id'    => 103,
                'title' => 'people_compatibility_show',
            ],
            [
                'id'    => 104,
                'title' => 'people_compatibility_delete',
            ],
            [
                'id'    => 105,
                'title' => 'people_compatibility_access',
            ],
            [
                'id'    => 106,
                'title' => 'ranking_compatibility_create',
            ],
            [
                'id'    => 107,
                'title' => 'ranking_compatibility_edit',
            ],
            [
                'id'    => 108,
                'title' => 'ranking_compatibility_show',
            ],
            [
                'id'    => 109,
                'title' => 'ranking_compatibility_delete',
            ],
            [
                'id'    => 110,
                'title' => 'ranking_compatibility_access',
            ],
            [
                'id'    => 111,
                'title' => 'competence_compatibility_create',
            ],
            [
                'id'    => 112,
                'title' => 'competence_compatibility_edit',
            ],
            [
                'id'    => 113,
                'title' => 'competence_compatibility_show',
            ],
            [
                'id'    => 114,
                'title' => 'competence_compatibility_delete',
            ],
            [
                'id'    => 115,
                'title' => 'competence_compatibility_access',
            ],
            [
                'id'    => 116,
                'title' => 'team_compatibility_create',
            ],
            [
                'id'    => 117,
                'title' => 'team_compatibility_edit',
            ],
            [
                'id'    => 118,
                'title' => 'team_compatibility_show',
            ],
            [
                'id'    => 119,
                'title' => 'team_compatibility_delete',
            ],
            [
                'id'    => 120,
                'title' => 'team_compatibility_access',
            ],
            [
                'id'    => 121,
                'title' => 'compatibility_access',
            ],
            [
                'id'    => 122,
                'title' => 'test_send_create',
            ],
            [
                'id'    => 123,
                'title' => 'test_send_edit',
            ],
            [
                'id'    => 124,
                'title' => 'test_send_show',
            ],
            [
                'id'    => 125,
                'title' => 'test_send_delete',
            ],
            [
                'id'    => 126,
                'title' => 'test_send_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
