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

use Fisharebest\Webtrees\GedcomElements\CustomElement;
use Fisharebest\Webtrees\GedcomElements\GedcomElementInterface;
use Fisharebest\Webtrees\GedcomElements\NamePersonal;
use Fisharebest\Webtrees\I18N;

/**
 * Class CustomTagsFTM
 */
class CustomTagsFamilyTreeMaker extends AbstractModule implements ModuleConfigInterface, ModuleCustomTagsInterface
{
    use ModuleConfigTrait;
    use ModuleCustomTagsTrait;

    /**
     * @return array<string,GedcomElementInterface>
     */
    public function customTags(): array
    {
        return [
            'FAM:_DETS' => new CustomElement(I18N::translate('Death of one spouse')),
            'FAM:_SEPR' => new CustomElement(I18N::translate('Separation')),

            'INDI:CITN'       => new CustomElement(I18N::translate('Citizenship')),
            'INDI:NAME:_NAMS' => new NamePersonal(I18N::translate('Namesake')),
            'INDI:_DNA'       => new CustomElement(I18N::translate('DNA markers')),
            'INDI:_DEG'       => new CustomElement(I18N::translate('Degree')),
            'INDI:_MDCL'      => new CustomElement(I18N::translate('Medical')),
            'INDI:_MILT'      => new CustomElement(I18N::translate('Military service')),

            'HEAD:_SCHEMA'                 => new CustomElement(I18N::translate('Individual')),
            'HEAD:_SCHEMA:INDI'            => new CustomElement(I18N::translate('Individual')),
            'HEAD:_SCHEMA:INDI:_FA1'       => new CustomElement(I18N::translate('Fact 1')),
            'HEAD:_SCHEMA:INDI:_FA1:LABL'  => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:INDI:_FREL'      => new CustomElement('Relationship to father'),
            'HEAD:_SCHEMA:INDI:_FREL:LABL' => new CustomElement('???'),
            'HEAD:_SCHEMA:INDI:_MREL'      => new CustomElement('Relationship to mother'),
            'HEAD:_SCHEMA:INDI:_MREL:LABL' => new CustomElement('???'),
            'HEAD:_SCHEMA:FAM'             => new CustomElement(I18N::translate('Family')),
            'HEAD:_SCHEMA:FAM:_FA1'        => new CustomElement(I18N::translate('Fact 1')),
            'HEAD:_SCHEMA:FAM:_FA1:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA2'        => new CustomElement(I18N::translate('Fact 2')),
            'HEAD:_SCHEMA:FAM:_FA2:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA3'        => new CustomElement(I18N::translate('Fact 3')),
            'HEAD:_SCHEMA:FAM:_FA3:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA4'        => new CustomElement(I18N::translate('Fact 4')),
            'HEAD:_SCHEMA:FAM:_FA4:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA5'        => new CustomElement(I18N::translate('Fact 5')),
            'HEAD:_SCHEMA:FAM:_FA5:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA6'        => new CustomElement(I18N::translate('Fact 6')),
            'HEAD:_SCHEMA:FAM:_FA6:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA7'        => new CustomElement(I18N::translate('Fact 7')),
            'HEAD:_SCHEMA:FAM:_FA7:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA8'        => new CustomElement(I18N::translate('Fact 8')),
            'HEAD:_SCHEMA:FAM:_FA8:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA9'        => new CustomElement(I18N::translate('Fact 9')),
            'HEAD:_SCHEMA:FAM:_FA9:LABL'   => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA10'       => new CustomElement(I18N::translate('Fact 10')),
            'HEAD:_SCHEMA:FAM:_FA10:LABL'  => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA11'       => new CustomElement(I18N::translate('Fact 11')),
            'HEAD:_SCHEMA:FAM:_FA11:LABL'  => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA12'       => new CustomElement(I18N::translate('Fact 12')),
            'HEAD:_SCHEMA:FAM:_FA12:LABL'  => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_FA13'       => new CustomElement(I18N::translate('Fact 13')),
            'HEAD:_SCHEMA:FAM:_FA13:LABL'  => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_MSTAT'      => new CustomElement(I18N::translate('Marriage beginning status')),
            'HEAD:_SCHEMA:FAM:_MSTAT:LABL' => new CustomElement(I18N::translate('Label')),
            'HEAD:_SCHEMA:FAM:_MEND'       => new CustomElement(I18N::translate('Marriage ending status')),
            'HEAD:_SCHEMA:FAM:_MEND:LABL'  => new CustomElement(I18N::translate('Label')),
        ];
    }

    /**
     * The application for which we are supporting custom tags.
     *
     * @return string
     */
    public function customTagApplication(): string
    {
        return 'Family Tree Maker';
    }
}
