<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221015154639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE branch ADD client_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', ADD user_id INT NOT NULL, ADD client_grants_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE branch ADD CONSTRAINT FK_BB861B1F19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE branch ADD CONSTRAINT FK_BB861B1FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE branch ADD CONSTRAINT FK_BB861B1F28B9C205 FOREIGN KEY (client_grants_id) REFERENCES client_grants (id)');
        $this->addSql('CREATE INDEX IDX_BB861B1F19EB6921 ON branch (client_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BB861B1FA76ED395 ON branch (user_id)');
        $this->addSql('CREATE INDEX IDX_BB861B1F28B9C205 ON branch (client_grants_id)');
        $this->addSql('ALTER TABLE client_grants ADD client_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\'');
        $this->addSql('ALTER TABLE client_grants ADD CONSTRAINT FK_310B8C6519EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_310B8C6519EB6921 ON client_grants (client_id)');
        $this->addSql('ALTER TABLE install_perm ADD client_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', ADD branch_id INT NOT NULL');
        $this->addSql('ALTER TABLE install_perm ADD CONSTRAINT FK_E2B63FC319EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE install_perm ADD CONSTRAINT FK_E2B63FC3DCD6CC49 FOREIGN KEY (branch_id) REFERENCES branch (id)');
        $this->addSql('CREATE INDEX IDX_E2B63FC319EB6921 ON install_perm (client_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E2B63FC3DCD6CC49 ON install_perm (branch_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE branch DROP FOREIGN KEY FK_BB861B1F19EB6921');
        $this->addSql('ALTER TABLE branch DROP FOREIGN KEY FK_BB861B1FA76ED395');
        $this->addSql('ALTER TABLE branch DROP FOREIGN KEY FK_BB861B1F28B9C205');
        $this->addSql('DROP INDEX IDX_BB861B1F19EB6921 ON branch');
        $this->addSql('DROP INDEX UNIQ_BB861B1FA76ED395 ON branch');
        $this->addSql('DROP INDEX IDX_BB861B1F28B9C205 ON branch');
        $this->addSql('ALTER TABLE branch DROP client_id, DROP user_id, DROP client_grants_id');
        $this->addSql('ALTER TABLE client_grants DROP FOREIGN KEY FK_310B8C6519EB6921');
        $this->addSql('DROP INDEX IDX_310B8C6519EB6921 ON client_grants');
        $this->addSql('ALTER TABLE client_grants DROP client_id');
        $this->addSql('ALTER TABLE install_perm DROP FOREIGN KEY FK_E2B63FC319EB6921');
        $this->addSql('ALTER TABLE install_perm DROP FOREIGN KEY FK_E2B63FC3DCD6CC49');
        $this->addSql('DROP INDEX IDX_E2B63FC319EB6921 ON install_perm');
        $this->addSql('DROP INDEX UNIQ_E2B63FC3DCD6CC49 ON install_perm');
        $this->addSql('ALTER TABLE install_perm DROP client_id, DROP branch_id');
    }
}
