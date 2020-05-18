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

use Fisharebest\Webtrees\GedcomElements\AddressEmail;
use Fisharebest\Webtrees\GedcomElements\CustomElement;
use Fisharebest\Webtrees\GedcomElements\GedcomElementInterface;
use Fisharebest\Webtrees\GedcomElements\XrefIndividual;
use Fisharebest\Webtrees\I18N;

/**
 * Class CustomTagsWebtrees
 */
class CustomTagsWebtrees extends AbstractModule implements ModuleConfigInterface, ModuleCustomTagsInterface
{
    use ModuleConfigTrait;
    use ModuleCustomTagsTrait;

    /**
     * @return array<string,GedcomElementInterface>
     */
    public function customTags(): array
    {
        // Many of these tags are not be created/used by webtrees - but we don't know which application creates them.
        return [
            'COMM'        => new CustomElement(I18N::translate('Comment')),
            'EMAI'        => new AddressEmail(I18N::translate('Email')),
            'INFL'        => new CustomElement(I18N::translate('Infant')),
            'LEGA'        => new CustomElement(I18N::translate('Legatee')),
            'NAME:_HEB'   => new CustomElement(I18N::translate('Name in Hebrew')),
            'SHARED_NOTE' => new CustomElement(I18N::translate('Shared note')),
            '_ADPF'       => new CustomElement(I18N::translate('Adopted by father')),
            '_ADPM'       => new CustomElement(I18N::translate('Adopted by mother')),
            '_AKA'        => new CustomElement(I18N::translate('Also known as')),
            '_AKAN'       => new CustomElement(I18N::translate('Also known as')),
            '_ASSO'       => new XrefIndividual(I18N::translate('Associate')),
            '_COML'       => new CustomElement(I18N::translate('Common law marriage')),
            '_EMAIL'      => new CustomElement(I18N::translate('Email address')),
            '_EYEC'       => new CustomElement(I18N::translate('Eye color')),
            '_FNRL'       => new CustomElement(I18N::translate('Funeral')),
            '_GEDF'       => new CustomElement(I18N::translate('GEDCOM file')),
            '_GODP'       => new CustomElement(I18N::translate('Godparent')),
            '_GOV'        => new CustomElement(/* I18N: https://gov.genealogy.net */ I18N::translate('GOV identifier')),
            '_HAIR'       => new CustomElement(I18N::translate('Hair color')),
            '_HEB'        => new CustomElement(I18N::translate('Hebrew')),
            '_HEIG'       => new CustomElement(I18N::translate('Height')),
            '_HNM'        => new CustomElement(I18N::translate('Hebrew name')),
            '_HOL'        => new CustomElement(I18N::translate('Holocaust')),
            '_INTE'       => new CustomElement(I18N::translate('Interment')),
            '_LOC'        => new CustomElement(I18N::translate('Location')),
            '_MARI'       => new CustomElement(I18N::translate('Marriage intention')),
            '_MARNM'      => new CustomElement(I18N::translate('Married name')),
            '_MARNM_SURN' => new CustomElement(I18N::translate('Married surname')),
            '_MBON'       => new CustomElement(I18N::translate('Marriage bond')),
            '_MEDC'       => new CustomElement(I18N::translate('Medical condition')),
            '_MILI'       => new CustomElement(I18N::translate('Military')),
            '_NAME'       => new CustomElement(I18N::translate('Mailing name')),
            '_NLIV'       => new CustomElement(I18N::translate('Not living')),
            '_NMAR'       => new CustomElement(I18N::translate('Never married')),
            '_NMR'        => new CustomElement(I18N::translate('Not married')),
            '_PRMN'       => new CustomElement(I18N::translate('Permanent number')),
            '_RNAME'      => new CustomElement(I18N::translate('Religious name')),
            '_SSHOW'      => new CustomElement(I18N::translate('Slide show')),
            '_STAT'       => new CustomElement(I18N::translate('Marriage status')),
            '_WEIG'       => new CustomElement(I18N::translate('Weight')),
            '_WITN'       => new CustomElement(I18N::translate('Witness')),
            '_YART'       => new CustomElement(I18N::translate('Yahrzeit')),
        ];
    }

    /**
     * The application for which we are supporting custom tags.
     *
     * @return string
     */
    public function customTagApplication(): string
    {
        return 'webtrees';
    }
}
