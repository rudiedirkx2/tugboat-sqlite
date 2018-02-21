<?php

return [
	'version' => 1,
	'tables' => [
		'users' => [
			'columns' => [
				'id' => ['pk' => true],
				'mail',
				'password',
				'name',
			],
			'indexes' => [
				'mail' => ['columns' => ['mail'], 'unique' => true],
			],
		],
	],
	'data' => [
		'users' => [
			['mail' => 'admin@example.com', 'password' => 'oele', 'name' => 'Admin Admin'],
			['mail' => 'user@example.com', 'password' => 'oele', 'name' => 'User One'],
		],
	],
];
