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
                    ->pause(2000)
                    ->press("DETALLES")
                    ->assertSee("Age of Empires II")
                    ->pause(2000)
                    ->press("COMPRAR")
                    ->pause(2000)
                    ->press("CANCELAR")
                    ->assertSee("Descripción:")
                    ->pause(2000)
                    ->press("SALIR")
                    ->assertSee("Información")
                    ->pause(2000)
                    ->clickLink("CARRERAS")
                    ->assertSee("Carreras")
                    ->pause(2000)
                    ->clickLink("ESTRATEGIA")
                    ->assertSee("Estrategia")
                    ->pause(2000)
                    ->clickLink("RPG")
                    ->assertSee("RPG")
                    ->pause(2000)
                    ->clickLink("AVENTURA")
                    ->assertSee("Aventura")
                    ->pause(2000)
                    ->clickLink("ACCION")
                    ->assertSee("Accion")
                    ->pause(2000)
                    ;
        });
    }
}
