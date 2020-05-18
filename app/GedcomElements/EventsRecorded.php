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

use Fisharebest\Webtrees\Factory;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Tree;

/**
 * EVENTS_RECORDED := {Size=1:90}
 * [<EVENT_ATTRIBUTE_TYPE> | <EVENTS_RECORDED>, <EVENT_ATTRIBUTE_TYPE>]
 * An enumeration of the different kinds of events that were recorded in a
 * particular source. Each enumeration is separated by a comma. Such as a
 * parish register of births, deaths, and marriages would be BIRT, DEAT, MARR.
 */
class EventsRecorded extends AbstractElement
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
        return strtoupper(strtr(parent::canonical($value), [' ' => '']));
    }

    /**
     * Display the value of this type of element.
     *
     * @param string $value
     * @param Tree   $tree
     *
     * @return string
     */
    public function value(string $value, Tree $tree): string
    {
        $tags = explode(',', $this->canonical($value));

        $events = array_map(static function (string $tag): string {
            foreach (['INDI', 'FAM'] as $record_type) {
                $element = Factory::gedcomElement()->make($record_type . ':' . $tag);

                if (!$element instanceof UnknownElement) {
                    return $element->label();
                }
            }

            return $tag;
        }, $tags);

        return implode(I18N::$list_separator, $events);
    }
}
