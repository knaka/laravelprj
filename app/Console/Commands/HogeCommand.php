<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Book;

class HogeCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'command:hoge {title} {author}';
	
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
		$title = $this->argument('title');
		$author = $this->argument('author');
		$book = new Book();
		$book->title = $title;
		$book->author = $author;
		$book->save();
		return 0;
	}
}
