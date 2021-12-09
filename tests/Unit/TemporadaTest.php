<?php

namespace Tests\Unit;

use App\Models\Episodio;
use App\Models\Temporada;
use PHPUnit\Framework\TestCase;

class TemporadaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $temporada = new Temporada();
        $episodio1 = new Episodio();
        $episodio1->assistido = true;
        $episodio2 = new Episodio();
        $episodio2->assistido = false;
        $episodio3 = new Episodio();
        $episodio3->assistido = true;

        $temporada->episodios->add($episodio1);
        $temporada->episodios->add($episodio2);
        $temporada->episodios->add($episodio3);
        
        
        $episodiosAssistidos = $temporada->getEpisodiosAssistidos();

        $this->assertCount(2, $episodiosAssistidos);
    }
}
