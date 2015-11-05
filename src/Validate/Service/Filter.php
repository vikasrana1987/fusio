<?php
/*
 * Fusio
 * A web-application to create dynamically RESTful APIs
 *
 * Copyright (C) 2015 Christoph Kappestein <k42b3.x@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fusio\Impl\Validate\Service;

/**
 * Filter
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class Filter
{
    public function strlen($value)
    {
        return strlen((string) $value);
    }

    public function alnum($value)
    {
        return ctype_alnum($value);
    }

    public function alpha($value)
    {
        return ctype_alpha($value);
    }

    public function digit($value)
    {
        return ctype_digit($value);
    }

    public function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function ip($value)
    {
        return filter_var($value, FILTER_VALIDATE_IP) !== false;
    }

    public function url($value)
    {
        return filter_var($value, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED) !== false;
    }

    public function xdigit($value)
    {
        return ctype_xdigit($value);
    }
}