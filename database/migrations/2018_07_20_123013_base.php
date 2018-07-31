<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Base extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void 
	 */
	public function up()
	{
		Schema::create('books', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('author');
			/**
			 * __call で attribute に格納されて、後で SQL の書き換えに使われるだけということで
			 * とても動的なので、無効な attribute を入れても何も起こらない（全部受け入れてから無視する）し、
			 * Fluent には property として登録されてもいないので補完も効かない
			 * @see \Illuminate\Database\Schema\Grammars\PostgresGrammar::modifyNullable() 
			 */
			// $age = $table->unsignedInteger('age');
			// いずれも可
			// $age->nullable(); // これは chain も可
			// $age->__call('nullable', [true]); // 実態はこれで、当然 chain も可
			// $age->offsetSet('nullable', true);
			// $age['nullable'] = true;
			// $age->__call('nullable', []);
			// $table->unsignedInteger('age')['nullable'] = true; // 変だがこれも可
			// 結局こんなのが冗長ながらも明示的なので一番好みかな…
			$table->unsignedInteger('age')
				->__call('nullable', [true])
				->__call('after', ['id']);
			$table->timestampsTz();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void 
	 */
	public function down() 
	{
		Schema::dropIfExists('books');
	}
}
