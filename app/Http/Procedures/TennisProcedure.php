<?php

declare(strict_types=1);

namespace App\Http\Procedures;

use Illuminate\Http\Request;
use Sajya\Server\Procedure;

class TennisProcedure extends Procedure
{
    /**
     * The name of the procedure that will be
     * displayed and taken into account in the search
     */
    public static string $name = 'tennis';

    /**
     * Execute the procedure.
     *
     * @return string
     */
    public function ping(Request $request)
    {
        return 'pong' . $request->id;
    }

    public function name(Request $request)
    {
        return response()->json([
            'data' => $request->api
        ]);
    }
}
