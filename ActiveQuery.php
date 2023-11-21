<?php
/**
 * @copyright Copyright (c) 2023 Didik Irawan
 */

namespace ddkirawan\clickhouse;

use bashkarev\clickhouse\ActiveQuery as ClickhouseActiveQuery;

class ActiveQuery extends ClickhouseActiveQuery
{

    public function onFinal()
    {
        $this->params(['_final' => true]);
        return $this;
    }

}