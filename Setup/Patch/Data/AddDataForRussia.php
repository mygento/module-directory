<?php

/**
 * @author Mygento Team
 * @copyright 2020 Mygento (https://www.mygento.ru)
 * @package Mygento_Directory
 */

namespace Mygento\Directory\Setup\Patch\Data;

use Magento\Directory\Setup\DataInstaller;
use Magento\Directory\Setup\DataInstallerFactory;
use Magento\Directory\Setup\Patch\Data\InitializeDirectoryData;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Add Russian Regions
 */
class AddDataForRussia implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var DataInstallerFactory
     */
    private $dataInstallerFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param DataInstallerFactory $dataInstallerFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        DataInstallerFactory $dataInstallerFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->dataInstallerFactory = $dataInstallerFactory;
    }

    /**
     * @inheritdoc
     */
    public function apply()
    {
        /** @var DataInstaller $dataInstaller */
        $dataInstaller = $this->dataInstallerFactory->create();
        $dataInstaller->addCountryRegions(
            $this->moduleDataSetup->getConnection(),
            $this->getDataForRussia()
        );
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [
            InitializeDirectoryData::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Russian regions data.
     *
     * @return array
     */
    private function getDataForRussia()
    {
        return [
            ['RU', '77', 'Москва'],
            ['RU', '78', 'Санкт-Петербург'],
            ['RU', '22', 'Алтайский край'],
            ['RU', '28', 'Амурская область'],
            ['RU', '29', 'Архангельская область'],
            ['RU', '30', 'Астраханская область'],
            ['RU', '31', 'Белгородская область'],
            ['RU', '32', 'Брянская область'],
            ['RU', '33', 'Владимирская область'],
            ['RU', '34', 'Волгоградская область'],
            ['RU', '35', 'Вологодская область'],
            ['RU', '36', 'Воронежская область'],
            ['RU', '79', 'Еврейская автономная область'],
            ['RU', '75', 'Забайкальский край'],
            ['RU', '37', 'Ивановская область'],
            // ['RU', '99', 'Иные территории, включая город и космодром Байконур'],
            ['RU', '38', 'Иркутская область'],
            ['RU', '07', 'Кабардино-Балкарская Республика'],
            ['RU', '39', 'Калининградская область'],
            ['RU', '40', 'Калужская область'],
            ['RU', '41', 'Камчатский край'],
            ['RU', '09', 'Карачаево-Черкесская Республика'],
            ['RU', '42', 'Кемеровская область'],
            ['RU', '43', 'Кировская область'],
            ['RU', '44', 'Костромская область'],
            ['RU', '23', 'Краснодарский край'],
            ['RU', '24', 'Красноярский край'],
            ['RU', '45', 'Курганская область'],
            ['RU', '46', 'Курская область'],
            ['RU', '47', 'Ленинградская область'],
            ['RU', '48', 'Липецкая область'],
            ['RU', '49', 'Магаданская область'],
            ['RU', '50', 'Московская область'],
            ['RU', '51', 'Мурманская область'],
            ['RU', '83', 'Ненецкий автономный округ'],
            ['RU', '52', 'Нижегородская область'],
            ['RU', '53', 'Новгородская область'],
            ['RU', '54', 'Новосибирская область'],
            ['RU', '55', 'Омская область'],
            ['RU', '56', 'Оренбургская область'],
            ['RU', '57', 'Орловская область'],
            ['RU', '58', 'Пензенская область'],
            ['RU', '59', 'Пермский край'],
            ['RU', '25', 'Приморский край'],
            ['RU', '60', 'Псковская область'],
            ['RU', '01', 'Республика Адыгея (Адыгея)'],
            ['RU', '04', 'Республика Алтай'],
            ['RU', '02', 'Республика Башкортостан'],
            ['RU', '03', 'Республика Бурятия'],
            ['RU', '05', 'Республика Дагестан'],
            ['RU', '06', 'Республика Ингушетия'],
            ['RU', '08', 'Республика Калмыкия'],
            ['RU', '10', 'Республика Карелия'],
            ['RU', '11', 'Республика Коми'],
            ['RU', '91', 'Республика Крым'],
            ['RU', '12', 'Республика Марий Эл'],
            ['RU', '13', 'Республика Мордовия'],
            ['RU', '14', 'Республика Саха (Якутия)'],
            ['RU', '15', 'Республика Северная Осетия - Алания'],
            ['RU', '16', 'Республика Татарстан (Татарстан)'],
            ['RU', '17', 'Республика Тыва'],
            ['RU', '19', 'Республика Хакасия'],
            ['RU', '61', 'Ростовская область'],
            ['RU', '62', 'Рязанская область'],
            ['RU', '63', 'Самарская область'],
            ['RU', '64', 'Саратовская область'],
            ['RU', '65', 'Сахалинская область'],
            ['RU', '66', 'Свердловская область'],
            ['RU', '92', 'Севастополь'],
            ['RU', '67', 'Смоленская область'],
            ['RU', '26', 'Ставропольский край'],
            ['RU', '68', 'Тамбовская область'],
            ['RU', '69', 'Тверская область'],
            ['RU', '70', 'Томская область'],
            ['RU', '71', 'Тульская область'],
            ['RU', '72', 'Тюменская область'],
            ['RU', '18', 'Удмуртская Республика'],
            ['RU', '73', 'Ульяновская область'],
            ['RU', '27', 'Хабаровский край'],
            ['RU', '86', 'Ханты-Мансийский автономный округ - Югра'],
            ['RU', '74', 'Челябинская область'],
            ['RU', '20', 'Чеченская Республика'],
            ['RU', '21', 'Чувашская Республика - Чувашия'],
            ['RU', '87', 'Чукотский автономный округ'],
            ['RU', '89', 'Ямало-Ненецкий автономный округ'],
            ['RU', '76', 'Ярославская область'],
        ];
    }
}
