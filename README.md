# GoCardless Bulk Subscription Tool

This is a script that will allow you to create new subscriptions in bulk which is useful for new account migrations.

*This script is not affiliated with GoCardless Ltd and comes with no warranty*

## Installation

Download repository and run composer to download required libraries:
```bash
composer install
```

Create your .env file:
```bash
touch .env
```

Format your .env file as follows:
```bash
GC_ACCESS_TOKEN=YOUR ACCESS TOKEN
INTERVAL=2
```
(You can get your access token [here](https://developer.gocardless.com/getting-started/api/making-your-first-request/#creating-an-access-token). The interval is the time between requests to prevent you hitting the API limit if your data file is large).

## Usage

Make sure your data.json file is in the main directory and is formatted as below then launch run.php.

```json
[
  {
      "mandate": "MD000GX253WT1A",
      "interval_unit": "monthly",
      "start_date": "2021-11-04",
      "end_date": "2022-01-04",
      "name": "TEST",
      "amount": 3115,
      "currency": "USD"
  },
  {
      "mandate": "MD000GX253WT2B",
      "interval_unit": "monthly",
      "start_date": "2021-11-04",
      "name": "TEST",
      "amount": 0,
      "currency": "GBP"
  }
]
```
Once the file has completed running a list will be returned and json file generated (completed.json) to return the actions that were performed on your GoCardless account.

```json
[
  {
    "mandate": "MD000GX253WT1A",
    "subscription_id": "SB000696NJKCPB",
    "result": "SUCCESS",
    "message": null
  },
  {
    "mandate": "MD000GX26T1GCW",
    "subscription_id": null,
    "result": "ERROR",
    "message": "Validation failed (amount must be greater than 0, amount is lower than the minimum permitted amount)"
  }
]
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
