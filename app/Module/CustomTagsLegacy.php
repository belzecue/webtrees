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

namespace Fisharebest\Webtrees\Module;

use Fisharebest\Webtrees\GedcomElements\GedcomElementInterface;
use Fisharebest\Webtrees\GedcomElements\UnknownElement;
use Fisharebest\Webtrees\I18N;

/**
 * Class CustomTagsLegacy
 */
class CustomTagsLegacy extends AbstractModule implements ModuleConfigInterface, ModuleCustomTagsInterface
{
    use ModuleConfigTrait;
    use ModuleCustomTagsTrait;

    /**
     * @see http://support.legacyfamilytree.com/article/AA-00520/0/GEDCOM-Files-custom-tags-in-Legacy.html
     *
     * @return array<string,GedcomElementInterface>
     */
    public function customTags(): array
    {
        return [
        ];
    }

    /**
     * The application for which we are supporting custom tags.
     *
     * @return string
     */
    public function customTagApplication(): string
    {
        return 'Legacy';
    }
}
