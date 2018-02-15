<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180213192259 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE companies (id INT AUTO_INCREMENT NOT NULL, nip VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, short_name VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_8244AA3A59329EEA (nip), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE companies_addresses (id INT AUTO_INCREMENT NOT NULL, company_id INT NOT NULL, zip_code VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, street_address VARCHAR(255) NOT NULL, short_note VARCHAR(255) DEFAULT NULL, INDEX IDX_9E53F944979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE companies_emails (id INT AUTO_INCREMENT NOT NULL, company_id INT NOT NULL, name VARCHAR(255) NOT NULL, short_note VARCHAR(255) DEFAULT NULL, INDEX IDX_EB05477C979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE companies_images (id INT AUTO_INCREMENT NOT NULL, company_id INT NOT NULL, name VARCHAR(255) NOT NULL, short_note VARCHAR(255) DEFAULT NULL, INDEX IDX_479B1144979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE companies_phones (id INT AUTO_INCREMENT NOT NULL, company_id INT NOT NULL, name VARCHAR(255) NOT NULL, short_note VARCHAR(255) DEFAULT NULL, INDEX IDX_44AC81DB979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE companies_websites (id INT AUTO_INCREMENT NOT NULL, company_id INT NOT NULL, name VARCHAR(255) NOT NULL, short_note VARCHAR(255) DEFAULT NULL, INDEX IDX_6849C75C979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE companies_addresses ADD CONSTRAINT FK_9E53F944979B1AD6 FOREIGN KEY (company_id) REFERENCES companies (id)');
        $this->addSql('ALTER TABLE companies_emails ADD CONSTRAINT FK_EB05477C979B1AD6 FOREIGN KEY (company_id) REFERENCES companies (id)');
        $this->addSql('ALTER TABLE companies_images ADD CONSTRAINT FK_479B1144979B1AD6 FOREIGN KEY (company_id) REFERENCES companies (id)');
        $this->addSql('ALTER TABLE companies_phones ADD CONSTRAINT FK_44AC81DB979B1AD6 FOREIGN KEY (company_id) REFERENCES companies (id)');
        $this->addSql('ALTER TABLE companies_websites ADD CONSTRAINT FK_6849C75C979B1AD6 FOREIGN KEY (company_id) REFERENCES companies (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE companies_addresses DROP FOREIGN KEY FK_9E53F944979B1AD6');
        $this->addSql('ALTER TABLE companies_emails DROP FOREIGN KEY FK_EB05477C979B1AD6');
        $this->addSql('ALTER TABLE companies_images DROP FOREIGN KEY FK_479B1144979B1AD6');
        $this->addSql('ALTER TABLE companies_phones DROP FOREIGN KEY FK_44AC81DB979B1AD6');
        $this->addSql('ALTER TABLE companies_websites DROP FOREIGN KEY FK_6849C75C979B1AD6');
        $this->addSql('DROP TABLE companies');
        $this->addSql('DROP TABLE companies_addresses');
        $this->addSql('DROP TABLE companies_emails');
        $this->addSql('DROP TABLE companies_images');
        $this->addSql('DROP TABLE companies_phones');
        $this->addSql('DROP TABLE companies_websites');
    }
}
