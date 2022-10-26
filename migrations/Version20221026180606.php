<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221026180606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE install_perm ADD client_grants_id INT NOT NULL');
        $this->addSql('ALTER TABLE install_perm ADD CONSTRAINT FK_E2B63FC328B9C205 FOREIGN KEY (client_grants_id) REFERENCES client_grants (id)');
        $this->addSql('CREATE INDEX IDX_E2B63FC328B9C205 ON install_perm (client_grants_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE install_perm DROP FOREIGN KEY FK_E2B63FC328B9C205');
        $this->addSql('DROP INDEX IDX_E2B63FC328B9C205 ON install_perm');
        $this->addSql('ALTER TABLE install_perm DROP client_grants_id');
    }
}
