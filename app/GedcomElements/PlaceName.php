<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2020 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\GedcomElements;

/**
 * PLACE_NAME := {1,120}
 * [ <PLACE_TEXT> | <PLACE_TEXT>, <PLACE_NAME> ]
 * The jurisdictional name of the place where the event took place. Jurisdictions are separated by
 * commas, for example, "Cove, Cache, Utah, USA." If the actual jurisdictional names of these
 * places have been identified, they can be shown using a PLAC.FORM structure either in the HEADER
 * or in the event structure. (See <PLACE_HIERARCHY>, page 58.)
 */
class PlaceName extends AbstractElement
{
    /**
     * Convert a value to a canonical form.
     *
     * @param string $value
     *
     * @return string
     */
    public function canonical(string $value): string
    {
        $value = parent::canonical($value);

        // Arabic, Chinese and Japanese commas.
        $value = strtr($value, ['،' => ',', '，' => ',', '、' => ',']);

        // Spaces before commas.
        $value = strtr($value, [' ,' => ',']);

        // Spaces after commas.
        $value = strtr($value, [',' => ', ']);
        $value = strtr($value, [',  ' => ', ']);

        return $value;
    }
}
