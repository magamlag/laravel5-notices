<?php

$factory( 'App\User', [
		'name'       => $faker->username,
		'email'      => $faker->email,
		'password' => bcrypt( '{$faker->word}' )
] );