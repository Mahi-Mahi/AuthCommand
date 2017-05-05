<?php

namespace MahiMahi\AuthCommand\Console\Commands;

use Illuminate\Console\Command;

use App\User;

use Illuminate\Support\Facades\Hash;

use Cerbero\CommandValidator\ValidatesInput;

class CreateUser extends Command
{

    use ValidatesInput;

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'auth:create-user {name?} {email?}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a user';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		//

		$password = $this->secret("What is the user's password ?");

		$user = User::create([
			'name'  =>  $this->argument('name'),
			'email'  =>  $this->argument('email'),
			'password'  =>  Hash::make($password)
		]);

		$this->info("Created user ".$user->name". (".$user->email.")");
	}

    public function rules()
    {
        return [
            'name'	=>	'required|max:32|unique:users,name',
            'email'	=>	'required|email|unique:users,email'
        ];
    }
}
