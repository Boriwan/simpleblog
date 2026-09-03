<?php

it('can render', function () {
    $contents = $this->view('articles', [
        //
    ]);

    $contents->assertSee('');
});
