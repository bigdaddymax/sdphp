<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AssetsTableSeeder::class);
        $this->call(AssetTypesTableSeeder::class);
        $this->call(BenchmarksTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ClientTeamPersonTableSeeder::class);
        $this->call(ClientTeamsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(DocumentDocumentTypeTableSeeder::class);
        $this->call(DocumentEntitiesTableSeeder::class);
        $this->call(DocumentTypesTableSeeder::class);
        $this->call(EntityTypesTableSeeder::class);
        $this->call(FundsTableSeeder::class);
        $this->call(GeneralPartnersTableSeeder::class);
        $this->call(GicsSectorsTableSeeder::class);
        $this->call(IndustriesTableSeeder::class);
        $this->call(InstitutionsTableSeeder::class);
        $this->call(InstitutionTypesTableSeeder::class);
        $this->call(InvestmentsTableSeeder::class);
        $this->call(InvestmentGrossPerformanceTableSeeder::class);
        $this->call(InvestmentOperationsTableSeeder::class);
        $this->call(InvestmentOperationTypesTableSeeder::class);
        $this->call(InvestmentStatusesTableSeeder::class);
        $this->call(InvestmentTypesTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(OrganizationIndustryTableSeeder::class);
        $this->call(OrganizationTypesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(PortfolioIndustryTableSeeder::class);
        $this->call(PortfolioTypesTableSeeder::class);
        $this->call(StrategiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DocumentFundsTableSeeder::class);
        $this->call(DocumentClientsTableSeeder::class);

        Model::reguard();
    }
}
