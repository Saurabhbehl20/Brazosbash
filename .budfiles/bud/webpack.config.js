module.exports = {
  "entry": {
    "app": {
      "import": [
        "@scripts/app",
        "@styles/app"
      ]
    },
    "editor": {
      "import": [
        "@scripts/editor",
        "@styles/editor"
      ]
    }
  },
  "bail": true,
  "cache": {
    "name": "bud.production",
    "type": "filesystem",
    "version": "_gs3n8zzv_hz90kgahhawf8ku80_",
    "cacheDirectory": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/.budfiles/cache/webpack",
    "managedPaths": [
      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules"
    ],
    "buildDependencies": {
      "bud": [
        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/package.json",
        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/.editorconfig",
        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/bud.config.js",
        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/composer.json",
        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/jsconfig.json",
        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/tailwind.config.js",
        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/theme.json"
      ]
    }
  },
  "context": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash",
  "infrastructureLogging": {
    "console": {
      "Console": {}
    },
    "level": "none"
  },
  "mode": "production",
  "module": {
    "noParse": {},
    "rules": [
      {
        "test": {},
        "exclude": [
          {}
        ],
        "parser": {
          "requireEnsure": false
        }
      },
      {
        "oneOf": [
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources"
            ],
            "use": [
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/babel-loader/lib/index.js",
                "options": {
                  "cacheDirectory": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/.budfiles/cache/babel",
                  "presets": [
                    [
                      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/@babel/preset-env/lib/index.js"
                    ],
                    [
                      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/@babel/preset-react/lib/index.js"
                    ]
                  ],
                  "plugins": [
                    [
                      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/@babel/plugin-transform-runtime/lib/index.js",
                      {
                        "helpers": false
                      }
                    ],
                    [
                      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/@babel/plugin-proposal-object-rest-spread/lib/index.js"
                    ],
                    [
                      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/@babel/plugin-syntax-dynamic-import/lib/index.js"
                    ],
                    [
                      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/@babel/plugin-proposal-class-properties/lib/index.js"
                    ]
                  ],
                  "env": {
                    "development": {
                      "compact": false
                    }
                  },
                  "root": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash"
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources"
            ],
            "use": [
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/mini-css-extract-plugin/dist/loader.js"
              },
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/css-loader/dist/cjs.js",
                "options": {
                  "importLoaders": 1,
                  "sourceMap": false
                }
              },
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/postcss-loader/dist/cjs.js",
                "options": {
                  "postcssOptions": {
                    "plugins": [
                      [
                        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/postcss-import/index.js"
                      ],
                      [
                        null
                      ],
                      [
                        null
                      ],
                      [
                        "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/postcss-preset-env/dist/index.cjs",
                        {
                          "stage": 1,
                          "features": {
                            "focus-within-pseudo-class": false
                          }
                        }
                      ]
                    ]
                  },
                  "sourceMap": true
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources"
            ],
            "use": [
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/mini-css-extract-plugin/dist/loader.js"
              },
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/css-loader/dist/cjs.js",
                "options": {
                  "importLoaders": 1,
                  "localIdentName": "[name]__[local]___[hash:base64:5]",
                  "modules": true,
                  "sourceMap": false
                }
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources"
            ],
            "type": "asset",
            "generator": {
              "filename": "fonts/[name].[contenthash:6][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash"
            ],
            "exclude": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules"
            ],
            "type": "json",
            "parser": {}
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash"
            ],
            "exclude": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/js-yaml-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash"
            ],
            "exclude": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/html-loader/dist/cjs.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash"
            ],
            "exclude": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/csv-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash"
            ],
            "exclude": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules"
            ],
            "use": [
              {
                "loader": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules/xml-loader/index.js"
              }
            ]
          },
          {
            "test": {},
            "include": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash"
            ],
            "exclude": [
              "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/node_modules"
            ],
            "type": "json",
            "parser": {}
          }
        ]
      }
    ],
    "unsafeCache": false
  },
  "name": "bud",
  "node": false,
  "output": {
    "assetModuleFilename": "[name].[contenthash:6][ext]",
    "chunkFilename": "[name].[contenthash:6].js",
    "filename": "[name].[contenthash:6].js",
    "path": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/public",
    "pathinfo": false,
    "publicPath": ""
  },
  "optimization": {
    "emitOnErrors": false,
    "minimize": true,
    "minimizer": [
      "...",
      {
        "options": {
          "test": {},
          "parallel": true,
          "minimizer": {
            "options": {
              "preset": [
                "default",
                {
                  "discardComments": {
                    "removeAll": true
                  }
                }
              ]
            }
          }
        }
      }
    ],
    "runtimeChunk": "single",
    "splitChunks": {
      "cacheGroups": {
        "bud": {
          "chunks": "all",
          "test": {},
          "reuseExistingChunk": true,
          "priority": -10
        },
        "vendor": {
          "chunks": "all",
          "test": {},
          "reuseExistingChunk": true,
          "priority": -20
        }
      }
    }
  },
  "parallelism": 10,
  "performance": {
    "hints": false
  },
  "recordsPath": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/.budfiles/bud/modules.json",
  "stats": {
    "preset": "errors-warnings"
  },
  "target": "browserslist:/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/package.json",
  "plugins": [
    {
      "patterns": [
        {
          "from": "images",
          "to": "[name].[contenthash:6][ext]",
          "context": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources",
          "noErrorOnMissing": true
        }
      ],
      "options": {}
    },
    {
      "options": {
        "assetHookStage": null,
        "basePath": "",
        "fileName": "manifest.json",
        "filter": null,
        "map": null,
        "publicPath": "",
        "removeKeyHash": {},
        "sort": null,
        "transformExtensions": {},
        "useEntryKeys": false,
        "useLegacyEmit": false,
        "writeToFileEmit": true
      }
    },
    {
      "_sortedModulesCache": {},
      "options": {
        "filename": "[name].[contenthash:6].css",
        "ignoreOrder": false,
        "runtime": true,
        "chunkFilename": "[name].[contenthash:6].css"
      },
      "runtimeOptions": {
        "linkType": "text/css"
      }
    },
    {
      "options": {
        "enabled": true,
        "verbose": false,
        "extensions": {},
        "ignore": [],
        "remove": {}
      },
      "enabled": true,
      "verbose": false
    },
    {
      "options": {
        "emitHtml": false,
        "publicPath": ""
      },
      "plugin": {
        "name": "EntrypointsManifestPlugin",
        "stage": null
      },
      "name": "entrypoints.json"
    },
    {
      "name": "WordPressExternalsWebpackPlugin",
      "stage": null,
      "externals": {
        "type": "window"
      }
    },
    {
      "plugin": {
        "name": "WordPressDependenciesWebpackPlugin",
        "stage": null
      },
      "manifest": {},
      "usedDependencies": {},
      "fileName": "wordpress.json"
    },
    {
      "plugin": {
        "name": "MergedManifestPlugin"
      },
      "file": "entrypoints.json",
      "entrypointsName": "entrypoints.json",
      "wordpressName": "wordpress.json"
    }
  ],
  "resolve": {
    "alias": {
      "@src": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources",
      "@dist": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/public",
      "@fonts": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources/fonts",
      "@images": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources/images",
      "@scripts": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources/scripts",
      "@styles": "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources/styles"
    },
    "extensions": [
      ".mjs",
      ".cjs",
      ".js",
      ".jsx",
      ".css",
      ".json",
      ".wasm",
      ".yml",
      ".toml"
    ],
    "modules": [
      "/sites/brazosbash.demo.techyscouts.dev/files/web/wp-content/themes/brazosbash/resources",
      "node_modules"
    ]
  }
}