<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DocumentsCoverletter extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'documents_coverletter';

    protected $fillable = [
        'id_user',
        'id_template',
        'doc_name',
        'contact_firstname',
        'contact_lastname',
        'job_title',
        'contact_email',
        'contact_phone',
        'contact_address',
        'greeting',
        'recipient_title',
        'recipient_firstname',
        'recipient_lastname',
        'company_name',
        'doc_body'
    ];
}
