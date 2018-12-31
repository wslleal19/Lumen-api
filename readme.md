# Lumen Api
Rest Api usando Lumen micro-framework e Dingo Api


## Start ##
Configure seu arquivo .env e já está pronto para usar.

**Examples :**<br/>
**No arquivo routes/web.php configure suas rotas**

```php
 $api = app('Dingo\Api\Routing\Router');

 $api->version('v1', function ($api) {
	 $api->post('get_user', 'App\Http\Controllers\Api\ApiController@getUser');
	 $api->post('get_all_users', 'App\Http\Controllers\Api\ApiController@getAllUsers');
 });
```

**No controller: ApiController crie seus métodos.**

```php
<?php

namespace App\Http\Controllers\Api;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use DB;

class ApiController extends BaseController{

	use Helpers;

	// Examples
	public function getUser(Request $request){
		$dados = $request->all();

		$query = DB::table('users')->where('id', $dados['user_id'])->first();
		return response()->json(array(
		   'status' => true,
		   'message' => 'User',
		   'response' => $query
		));
	}

	public function getAllUsers(Request $request){

		$query = DB::table('users')->get();
		return response()->json(array(
		   'status' => true,
		   'message' => 'Users array',
		   'response' => $query
		));
	}

}
```
## Documentation ##
- [Lumen micro-framework](https://lumen.laravel.com/)
- [Dingo Api](https://github.com/dingo/api)
