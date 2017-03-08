[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Vatlayer/functions?utm_source=RapidAPIGitHub_VatlayerFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Vatlayer Package
Vatlayer
* Domain: vatlayer.com
* Credentials: apiKey

## How to get credentials: 
0. Go to [Vatlayer website](https://vatlayer.com) 
1. Log in or create a new account
2. Go to [Dashboard page](https://vatlayer.com/dashboard) to get your API key

## Vatlayer.validateVATNumber
Perform VAT number validations and company information lookups

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Vatlayer
| vatNumber| String     | VAT number

## Vatlayer.getVATRate
Request VAT rates for a country of your choice.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Vatlayer
| countryCode| String     | Code of the country

## Vatlayer.getVATRateList
Request VAT rates for all 28 EU member states at once.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key obtained from Vatlayer

## Vatlayer.getVATPrice
Request the API to calculate VAT compliant prices on your behalf.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Vatlayer
| countryCode| String     | Code of the country
| amount     | String     | The amount/price you would like to calculate in compliance with EU VAT rates

