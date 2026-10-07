# Wina Bwangu



Wina Bwangu is a PHP and MySQL-based transaction and booth management system developed as an academic software project. The application demonstrates how transactions from multiple service booths can be recorded, organized and analysed through a database-backed web interface.



The system allows a user to select a booth and service, record transactions, calculate cumulative transaction values, monitor service limits and estimate revenue based on stored service rates.



> **Project Context:** Wina Bwangu is an earlier academic project and is preserved as part of my software development journey. The repository demonstrates practical experience with PHP, MySQL, Bootstrap, database integration and transaction-processing logic.



---



## Project Overview



Wina Bwangu was designed around a multi-booth service environment where individual booths can provide different financial or mobile-money services.



The application connects a PHP-based web interface to a MySQL database containing information about:



- Booths

- Booth locations

- Services

- Services provided by individual booths

- Transactions

- Service revenue rates

- Monthly service limits



The application then uses this information to process transactions and calculate cumulative summaries for selected booths and services.



---



## Key Features



### Booth Management



The system retrieves available booths from the database and associates each booth with its corresponding location and available services.



### Service Selection



Services associated with a selected booth can be retrieved dynamically, allowing transactions and calculations to be performed against the appropriate service.



Examples represented in the original project include mobile-money and financial services.



### Transaction Recording



Transactions can be recorded against a selected booth and service.



Each new transaction receives a generated identifier using the format:



```text

WB00000001

```



The identifier is generated after the transaction is inserted into the database.



### Cumulative Transaction Calculations



The application can calculate cumulative information for a selected booth and service, including:



- Number of transactions

- Total transaction amount

- Monthly service limit

- Remaining monthly limit

- Revenue per kwacha

- Calculated cumulative revenue



### Revenue Calculation



Revenue is calculated using the service-specific `revenue_per_kwacha` value stored in the database.



Conceptually:



```text

Cumulative Revenue = Revenue Per Kwacha Ã— Total Transaction Amount

```



### Database-Backed Operation



Application data is stored in a MySQL database and accessed through PHP using MySQLi.



The original development database is maintained separately from the public repository. Database dumps and local environment files are intentionally excluded from version control.



---



## Application Workflow



### 1. Select Booth and Service



The user begins by selecting the booth and service for which a transaction or calculation will be performed.



!\[Booth and service selection](docs/screenshots/01-booth-and-service-selection.png)



### 2. Booth and Service Selected



Once the appropriate booth and service are selected, the application can use the corresponding database information for transaction processing.



!\[Selected booth and service](docs/screenshots/02-booth-and-service-selected.png)



### 3. Transaction Calculation



The system processes transaction information using the selected booth and service.



!\[Transaction calculation](docs/screenshots/03-transaction-calculation.png)



### 4. Cumulative Summary



A booth and service can also be selected for cumulative analysis.



!\[Cumulative summary selection](docs/screenshots/04-cumulative-summary-selection.png)



### 5. Cumulative Calculation Results



The application retrieves matching transactions and calculates the cumulative transaction information.



!\[Cumulative calculation results](docs/screenshots/05-cumulative-calculation-results.png)



### 6. Visual Summary



Cumulative information can also be represented visually.



!\[Cumulative pie chart](docs/screenshots/06-cumulative-pie-chart.png)



---



## Database Structure



Wina Bwangu uses a MySQL database to store the information required by the application.



Some of the primary data structures demonstrated by the project include booth records, service records, booth-service relationships and transaction records.



### Booth Records



Booths are stored with identifying information and their associated locations.



!\[Booths database table](docs/screenshots/07-booths-database-table.png)



### Services



Service records contain information used by the transaction and cumulative calculation functionality, including service-specific revenue values and monthly limits.



!\[Services database table](docs/screenshots/08-services-database-table.png)



### Booth-Service Relationships



The application maintains information about which services are provided by individual booths.



!\[Provided services database table](docs/screenshots/09-provided-services-database-table.png)



### Transactions



Recorded transactions contain information such as the booth, location, service, transaction amount, revenue rate and generated transaction identifier.



!\[Transactions database table](docs/screenshots/10-transactions-database-table.png)



---



## Technology Stack



| Technology | Purpose |

|---|---|

| PHP | Server-side application logic and database operations |

| MySQL | Storage of booths, services and transaction records |

| MySQLi | PHP-to-MySQL database connectivity |

| HTML | Application structure |

| CSS | Interface styling |

| Bootstrap 5 | Responsive interface components and layout |

| JavaScript | Client-side interaction and dynamic functionality |

| XAMPP | Local PHP and MySQL development environment |



---



## Project Structure



```text

wina-bwangu/

â”‚

â”œâ”€â”€ assets/

â”‚   â””â”€â”€ dist/

â”‚       â””â”€â”€ bootstrap-5.3.2-dist/

â”‚

â”œâ”€â”€ core/

â”‚   â”œâ”€â”€ booth-data.php

â”‚   â”œâ”€â”€ calculate-cumulative-total.php

â”‚   â”œâ”€â”€ create-transaction.php

â”‚   â”œâ”€â”€ get-booth-services.php

â”‚   â”œâ”€â”€ get-service-revenue.php

â”‚   â””â”€â”€ location-data.php

â”‚

â”œâ”€â”€ docs/

â”‚   â””â”€â”€ screenshots/

â”‚

â”œâ”€â”€ includes/

â”‚   â”œâ”€â”€ config.php

â”‚   â”œâ”€â”€ DBConnection.php

â”‚   â”œâ”€â”€ head-tag-contents.php

â”‚   â””â”€â”€ header-nav.php

â”‚

â”œâ”€â”€ php-templates/

â”‚   â””â”€â”€ locations.php

â”‚

â”œâ”€â”€ index.php

â”œâ”€â”€ .gitignore

â””â”€â”€ README.md

```



---



## How the Core Logic Works



### Creating a Transaction



When a transaction is submitted, the application:



1\. Receives the selected booth, service and transaction amount.

2\. Retrieves the service's revenue-per-kwacha value.

3\. Retrieves the selected booth and its location.

4\. Inserts the transaction into the MySQL database.

5\. Retrieves the newly generated database ID.

6\. Pads the ID and prefixes it with `WB`.

7\. Updates the transaction with its final Wina Bwangu transaction identifier.



For example:



```text

Database ID: 1

Generated Transaction ID: WB00000001

```



### Calculating Cumulative Totals



For a selected booth and service, the application retrieves matching transactions and determines:



```text

Transaction Count

Total Transaction Amount

Monthly Service Limit

Remaining Monthly Limit

Cumulative Revenue

```



The remaining service limit is calculated as:



```text

Remaining Limit = Monthly Service Limit - Total Transaction Amount

```



---



## Running the Project Locally



### Requirements



To run the project locally, you will need:



- XAMPP or another PHP/MySQL development environment

- PHP

- MySQL

- A web browser



### Setup



1\. Clone the repository:



```bash

git clone https://github.com/EmmanuelPhiri20/wina-bwangu.git

```



2\. Place the project inside your local web server directory, for example:



```text

C:\\xampp\\htdocs\\logbook

```



3\. Start **Apache** and **MySQL** from XAMPP.



4\. Create a MySQL database named:



```text

logbook

```



5\. Configure your local database connection in:



```text

includes/DBConnection.php

```



The original project was developed using a local MySQL environment.



6\. Open the application through your local server, for example:



```text

http://localhost/logbook/

```



> The original project database and its historical records are not included in this public repository. A compatible database structure and appropriate local records are required for full functionality.



---



## Project Status



Wina Bwangu is preserved as an **academic prototype and portfolio project** rather than a production-ready financial system.



The repository reflects an earlier stage of my software development journey and demonstrates practical implementation of:



- PHP server-side development

- MySQL database integration

- CRUD-oriented transaction processing

- Dynamic booth and service retrieval

- Business-rule calculations

- Bootstrap-based interface development

- Data-driven reporting



Some sections of the original prototype remain incomplete or experimental.



---



## Potential Improvements



If the project were developed further, improvements would include:



- Using prepared statements for all database queries

- Stronger server-side input validation and sanitization

- Authentication and role-based authorization

- Environment-based database configuration

- Improved exception and database error handling

- Completion of unfinished service/location functionality

- Separation of presentation and business logic

- Responsive UI refinement

- Automated testing

- Database migrations or a sanitized schema for reproducible setup

- Improved reporting and dashboard visualizations



These improvements reflect practices that would be appropriate when evolving the academic prototype toward a more maintainable production-style application.



---



## Repository Notes



The public repository intentionally excludes the original MySQL database dump and local database records.



Files such as SQL database exports, environment files, logs and local development artifacts are excluded through `.gitignore` to prevent local or potentially sensitive data from being committed accidentally.



---



## Author



**Emmanuel Phiri**



Computer Science Graduate - Merit

Software Developer



- GitHub: \[EmmanuelPhiri20](https://github.com/EmmanuelPhiri20)

- Portfolio: \[emmanuelphiri-portfolio.netlify.app](https://emmanuelphiri-portfolio.netlify.app/)



---



## Academic Project Notice



Wina Bwangu was developed as an academic project and is maintained here primarily for educational and portfolio purposes. It should not be interpreted as a production deployment or a currently operating financial transaction platform.
