# GiveWP to Sendy Integration for Subscribe Lists

This repository provides code snippets and instructions for integrating GiveWP, a WordPress donation plugin, with Sendy, a self-hosted email newsletter application, to allow users to subscribe to email lists during the donation process.

![image](https://github.com/khairulimran-97/givewp-to-sendy/assets/105085586/6f38120b-2b1f-4d59-8e53-2095447c629d)

## Prerequisites

Before proceeding with the integration, make sure you have the following:

- A WordPress website with GiveWP plugin installed
- A Sendy installation with API access and a valid API key
- Basic understanding of WordPress hooks and PHP programming

## Installation

1. Clone or download this repository to your local development environment.

2. Copy the code snippet from `snippet.php` and paste it into your theme's `functions.php` file or in a custom plugin file.

3. Replace the placeholders in the code snippet with your actual Sendy `installation URL`, `list ID`, and `API key`.

4. Save the changes to the file.

## Usage

Once the integration is installed and activated, the `subscribe_to_sendy_list` function will be hooked to the `give_insert_payment` action in GiveWP. This function handles the subscription process when a donation is made.

During the donation process, the user's email and name will be retrieved from the GiveWP payment data. The function will then make an API request to the Sendy installation's subscription endpoint to add the user's email to the specified email list.

If the subscription is successful, the function will return `true`. If the subscription fails, it will return `false`.

You can customize the code snippet and the success/failure handling according to your specific requirements.

## Contributing

Contributions are welcome! If you have any improvements or additional features to suggest, please feel free to submit a pull request.

## License

This integration is released under the [MIT License](LICENSE), which means you are free to use, modify, and distribute the code.

## Disclaimer

This integration is provided as-is and without warranty. Please test the integration thoroughly in your development environment before deploying it to a production site. The authors of this integration are not responsible for any issues or damages that may occur from its usage.

## Resources

- [GiveWP Documentation](https://givewp.com/documentation/)
- [Sendy Documentation](https://sendy.co/documentation)
