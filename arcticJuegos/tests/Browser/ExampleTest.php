<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->maximize()
                    ->visit('/')
                    ->assertSee('Arctic Game Universe')
                    ->press("DETALLES")
                    ->assertSee("Age of Empires II")
                    ->press("COMPRAR")
                    ->press("CANCELAR")
                    ->assertSee("Descripción:")
                    ->press("SALIR")
                    ->assertSee("Información")
                    ->clickLink("CARRERAS")
                    ->assertSee("Carreras")
                    ->clickLink("ESTRATEGIA")
                    ->assertSee("Estrategia")
                    ->clickLink("RPG")
                    ->assertSee("RPG")
                    ->clickLink("AVENTURA")
                    ->assertSee("Aventura")
                    ->clickLink("ACCION")
                    ->assertSee("Accion")
                    ;
        });
    }
}
