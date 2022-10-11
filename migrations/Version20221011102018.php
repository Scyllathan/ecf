<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221011102018 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE branch (id INT AUTO_INCREMENT NOT NULL, client_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', install_perms_id INT NOT NULL, name VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, manager_name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, INDEX IDX_BB861B1F19EB6921 (client_id), UNIQUE INDEX UNIQ_BB861B1F769AA563 (install_perms_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_grants (id INT AUTO_INCREMENT NOT NULL, client_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', active TINYINT(1) NOT NULL, perms LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', UNIQUE INDEX UNIQ_310B8C6519EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE install_perm (id INT AUTO_INCREMENT NOT NULL, client_grants_id INT NOT NULL, members_read TINYINT(1) NOT NULL, members_write TINYINT(1) NOT NULL, members_add TINYINT(1) NOT NULL, members_products_add TINYINT(1) NOT NULL, members_payment_schedules_read TINYINT(1) NOT NULL, members_statistic_read TINYINT(1) NOT NULL, members_subscription_read TINYINT(1) NOT NULL, members_schedules_read TINYINT(1) NOT NULL, members_schedules_write TINYINT(1) NOT NULL, payment_day_read TINYINT(1) NOT NULL, INDEX IDX_E2B63FC328B9C205 (client_grants_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE branch ADD CONSTRAINT FK_BB861B1F19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE branch ADD CONSTRAINT FK_BB861B1F769AA563 FOREIGN KEY (install_perms_id) REFERENCES install_perm (id)');
        $this->addSql('ALTER TABLE client_grants ADD CONSTRAINT FK_310B8C6519EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE install_perm ADD CONSTRAINT FK_E2B63FC328B9C205 FOREIGN KEY (client_grants_id) REFERENCES client_grants (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE branch DROP FOREIGN KEY FK_BB861B1F19EB6921');
        $this->addSql('ALTER TABLE branch DROP FOREIGN KEY FK_BB861B1F769AA563');
        $this->addSql('ALTER TABLE client_grants DROP FOREIGN KEY FK_310B8C6519EB6921');
        $this->addSql('ALTER TABLE install_perm DROP FOREIGN KEY FK_E2B63FC328B9C205');
        $this->addSql('DROP TABLE branch');
        $this->addSql('DROP TABLE client_grants');
        $this->addSql('DROP TABLE install_perm');
    }
}
