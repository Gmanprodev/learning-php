<?php

require 'database/connection.php';
require 'database/query_builder.php';

return new QueryBuilder(Connection::make());