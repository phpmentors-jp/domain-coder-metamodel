<?php
/*
 * Copyright (c) 2014 GOTO Hidenori <hidenorigoto@gmail.com>,
 * All rights reserved.
 *
 * This file is part of Domain Coder.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace DomainCoder\Model\Data;

class Field
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $realName;
    /**
     * @var boolean
     */
    public $primary;
    /**
     * @var string
     */
    public $type;
    /**
     * @var int
     */
    public $size;
    /**
     * @var boolean
     */
    public $notNull;
    /**
     * @var string
     */
    public $description;
    /**
     * @var Field
     */
    public $referenceField;
    /**
     * @var Data
     */
    public $belongTo;
}