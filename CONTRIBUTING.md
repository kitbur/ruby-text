# Contributing to Flarum Ruby Text

Thank you for your interest in contributing! All contributionss are welcome, from bug reports to new features. Please take a moment to review these guidelines to make the process as smooth as possible.

## Reporting Issues

- **Check Existing Issues:** Before opening a new issue, please search the [GitHub Issues](https://github.com/kitbur/ruby-text/issues) to see if your problem has already been reported.
- **Be Descriptive:** Provide a clear and descriptive title and include as much information as possible in the body. Be sure to include your Flarum version, steps to reproduce the issue, and any relevant error messages.

## Pull Requests (Contributing Code)

Follow the standard "Fork & Pull Request" workflow.

1.  **Fork** the repository on GitHub.
2.  **Clone** your fork to your local machine.
3.  **Create a new branch** for your changes (`git checkout -b feature/my-new-feature`).
4.  **Make your changes.** Please adhere to the existing coding style.
5.  **Run the build scripts** if you make any changes to CSS or JS (`npm run build`).
6.  **Commit your changes** with a clear and descriptive commit message.
7.  **Push** your new branch to your fork on GitHub (`git push origin feature/my-new-feature`).
8.  **Submit a Pull Request** back to the main repository. Please describe the changes you have made and why.

### Development Setup

If you want to set up this extension locally to work on it, follow these steps after cloning your fork:

1.  Make sure your main Flarum installation's `composer.json` file has a `path` repository pointing to your `packages` directory.
2.  From the Flarum root, run `composer require kitbur/ruby-text:"*@dev"`.
3.  Navigate into the extension directory (`cd packages/kitbur-ruby-text`).
4.  Install JavaScript dependencies: `npm install`.
5.  Run the dev watcher: `npm run dev`. This will automatically recompile assets as you make changes to `.less` or `.js` files.

## Code of Conduct

Follow Flarum's [Code of Conduct](https://docs.flarum.org/code-of-conduct/).