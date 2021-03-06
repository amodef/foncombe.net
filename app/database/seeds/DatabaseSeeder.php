<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

    $this->call('AlliesTableSeeder');
    $this->call('PlayersTableSeeder');
		$this->call('CitiesTableSeeder');
	}

}

class CitiesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('cities')->delete();

    City::create(array(
    	'name' => 'Teulada',
    	'player_id' => 1,
			'xaxis' => 785,
			'yaxis' => 434
		));
    City::create(array(
      'name' => 'COUSSIN',
      'player_id' => 2,
      'xaxis' => 757,
      'yaxis' => 303
    ));
    City::create(array(
      'name' => 'Dispomanie',
      'player_id' => 3,
      'xaxis' => 790,
      'yaxis' => 224
    ));
    City::create(array(
      'name' => 'Core y gang',
      'player_id' => 3,
      'xaxis' => 789,
      'yaxis' => 224
    ));
  }
}

class PlayersTableSeeder extends Seeder {

  public function run()
  {
    DB::table('players')->delete();

    Player::create(array(
      'name' => 'eva_rose',
      'ally_id' => 1,   
      'power' => 4600000
    ));
    Player::create(array(
      'name' => 'Amambra',
      'ally_id' => 1,   
      'power' => 7168000
    ));
    Player::create(array(
      'name' => 'Ben29',
      'ally_id' => 2,   
      'power' => 13259000
    ));
  }
}

class AlliesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('allies')->delete();

    Ally::create(array(
      'name' => '_COSA_NOSTRA_'
    ));
    Ally::create(array(
      'name' => 'Archanges'
    ));
  }
}