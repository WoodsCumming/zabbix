<?php
/*
** Zabbix
** Copyright (C) 2001-2015 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


class CButton extends CTag implements CButtonInterface {

	public function __construct($name = 'button', $caption = '', $action = null, $class = null) {
		parent::__construct('button', 'yes', $caption, $class);
		$this->setAttribute('type', 'button');

		if ($name !== null) {
			$this->setAttribute('id', zbx_formatDomId($name));
			$this->setAttribute('name', $name);
		}

		$this->onClick($action);
	}

	/**
	 * @see CButtonInterface::main()
	 */
	public function main() {
		$this->addClass('main');
	}

	/**
	 * Enable or disable the element.
	 *
	 * @param bool $value
	 */
	public function setEnabled($value) {
		if ($value) {
			$this->removeAttribute('disabled');
		}
		else {
			$this->setAttribute('disabled', 'disabled');
		}
	}
}
