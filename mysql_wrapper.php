<?php

/**
 * Copyright (C) 2023 WebDesires
 * Author: Dean Williams
 * https://webdesires.co.uk
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

$global_connection = null;

function mysql_connect($address, $user, $password) {
  global $global_connection;
  $global_connection = mysqli_connect($address, $user, $password);
  return $global_connection;
}

function mysql_select_db($dbname, $connection = null) {
  global $global_connection;
  $connection = $connection ?: $global_connection;
  return mysqli_select_db($connection, $dbname);
}

function mysql_query($query, $connection = null) {
  global $global_connection;
  $connection = $connection ?: $global_connection;
  return mysqli_query($connection, $query);
}

function mysql_fetch_assoc($result) {
  return mysqli_fetch_assoc($result);
}

function mysql_num_rows($result) {
  return mysqli_num_rows($result);
}

function mysql_result($result, $row, $field = 0) {
  mysqli_data_seek($result, $row);
  $data = mysqli_fetch_array($result);
  return $data[$field];
}

function mysql_error($connection = null) {
  global $global_connection;
  $connection = $connection ?: $global_connection;
  return mysqli_error($connection);
}

function mysql_real_escape_string($string, $connection = null) {
  global $global_connection;
  $connection = $connection ?: $global_connection;
  return mysqli_real_escape_string($connection, $string);
}

function mysql_insert_id($connection = null) {
  global $global_connection;
  $connection = $connection ?: $global_connection;
  return mysqli_insert_id($connection);
}
