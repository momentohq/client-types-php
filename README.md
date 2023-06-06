# Momento client-types-php


This repo contains a github action that does the following:
* Pulls the latest source code from momento client-protos
* Generates the PHP types from it
* Attaches the output as a ZIP file asset on the gh action execution.

Developers will then download the ZIP asset and use it to overwrite
the static copy of the proto types that are included directly in
the [`client-sdk-php` repo](https://github.com/momentohq/client-sdk-php/tree/main/types)

TODO: we could move this logic into client-protos or directly into the client-sdk-php repo.

