<?php

class Cards
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function getCount($table, $condition, $params)
    {
        return Controllers::countData($this->connection->conn, $table, $condition, $params);
    }

    public function getPendingCount()
    {
        $pendingVacData = $this->getCount('vaccinations', 'status = ?', ['pending']);
        $pendingFamData = $this->getCount('family_planning', 'status = ?', ['pending']);
        return $pendingVacData + $pendingFamData;
    }

    public function getApprovedCount()
    {
        $approvedVacData = $this->getCount('vaccinations', 'status = ?', ['approved']);
        $approvedFamData = $this->getCount('family_planning', 'status = ?', ['approved']);
        return $approvedVacData + $approvedFamData;
    }

    public function getActiveVaccineCount()
    {
        return $this->getCount('vaccines', 'status = ?', ['active']);
    }

    public function getActiveUserCount()
    {
        return $this->getCount('users', 'status = ?', ['active']);
    }

    public function getHealthcareCount()
    {
        return $this->getCount('users', 'role = ?', [4]);
    }

    public function render()
    {
        echo <<<HTML
            <div class='row'>
        <div class='col-sm-3 col-xs-6'>

            <div class='tile-stats tile-red'>
                <div class='icon'><i class='entypo-users'></i></div>
                <div class='num' data-start='0' data-end='{$this->getPendingCount()}' data-postfix='' data-duration='1500' data-delay='0'>0</div>

                <h3>Pending Appointments</h3>
                <p>Total of pending appointments</p>
            </div>

        </div>

        <div class='col-sm-3 col-xs-6'>

            <div class='tile-stats tile-green'>
                <div class='icon'><i class='entypo-chart-bar'></i></div>
                <div class='num' data-start='0' data-end='{$this->getApprovedCount()}' data-postfix='' data-duration='1500' data-delay='600'>0</div>

                <h3>Patients</h3>
                <p>Total number of patients</p>
            </div>

        </div>

        <div class='clear visible-xs'></div>

        <div class='col-sm-3 col-xs-6'>

            <div class='tile-stats tile-aqua'>
                <div class='icon'><i class='entypo-mail'></i></div>
                <div class='num' data-start='0' data-end='{$this->getActiveVaccineCount()}' data-postfix='' data-duration='1500' data-delay='1200'>0</div>

                <h3>Vaccines</h3>
                <p>Total Available Vaccines</p>
            </div>

        </div>

            <div class='col-sm-3 col-xs-6'>

                <div class='tile-stats tile-blue'>
                    <div class='icon'><i class='entypo-rss'></i></div>
                    <div class='num' data-start='0' data-end='{$this->getActiveUserCount()}' data-postfix='' data-duration='1500' data-delay='1800'>0</div>

                    <h3>Users</h3>
                    <p>Total number of users</p>
                </div>

            </div>
        </div>
        
        HTML;
    }
}
