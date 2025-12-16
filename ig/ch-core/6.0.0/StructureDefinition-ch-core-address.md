# CH Core Address - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Address**

## Data Type Profile: CH Core Address 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreAddress |
| **Copyright/Legal**: CC0-1.0 | |

 
address incorporating eCH-0010 postal address extensions 

**Usages:**

* Derived from this DataType Profile: [CH Core Postal Address](StructureDefinition-ch-core-address-ech-10.md), [Address for Place of Birth](StructureDefinition-ch-core-address-ech-11-placeofbirth.md) and [Address for Place of Origin](StructureDefinition-ch-core-address-ech-11-placeoforigin.md)
* Use this DataType Profile: [CH Core Organization](StructureDefinition-ch-core-organization.md), [CH Core Patient](StructureDefinition-ch-core-patient.md), [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md) and [CH Core RelatedPerson](StructureDefinition-ch-core-relatedperson.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-address)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-address.csv), [Excel](StructureDefinition-ch-core-address.xlsx), [Schematron](StructureDefinition-ch-core-address.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-address",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address",
  "version" : "6.0.0",
  "name" : "CHCoreAddress",
  "title" : "CH Core Address",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "address incorporating eCH-0010 postal address extensions",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH-0011",
      "uri" : "http://www.ech.ch/standards/39485",
      "name" : "eCH-0011 Datenstandard Personendaten"
    },
    {
      "identity" : "eCH",
      "uri" : "https://www.ech.ch/",
      "name" : "eCH Standards"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "vcard",
      "uri" : "http://w3.org/vcard",
      "name" : "vCard Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Address",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Address",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Address",
        "path" : "Address",
        "constraint" : [
          {
            "key" : "ch-addr-2",
            "severity" : "error",
            "human" : "For a Swiss address, a canton abbreviation from the value set 'eCH-0007 Canton Abbreviation' must be used.",
            "expression" : "country.extension.where(url = 'http://hl7.org/fhir/StructureDefinition/iso21090-codedString').empty() or \n            (country.extension.where(url = 'http://hl7.org/fhir/StructureDefinition/iso21090-codedString').value.code.startsWith('CH') = false) or \n            (country.extension.where(url = 'http://hl7.org/fhir/StructureDefinition/iso21090-codedString').value.code.startsWith('CH').exists() and \n             (state.empty() or state.memberOf('http://fhir.ch/ig/ch-core/ValueSet/ech-7-cantonabbreviation')))",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address"
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: addressInformation"
          }
        ]
      },
      {
        "id" : "Address.line.extension",
        "path" : "Address.line.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            },
            {
              "type" : "value",
              "path" : "value"
            }
          ],
          "ordered" : true,
          "rules" : "open"
        }
      },
      {
        "id" : "Address.line.extension:addressLine1",
        "path" : "Address.line.extension",
        "sliceName" : "addressLine1",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: addressLine1"
          }
        ]
      },
      {
        "id" : "Address.line.extension:addressLine1.value[x]:valueCode",
        "path" : "Address.line.extension.value[x]",
        "sliceName" : "valueCode",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "fixedCode" : "addressLine1"
      },
      {
        "id" : "Address.line.extension:addressLine2",
        "path" : "Address.line.extension",
        "sliceName" : "addressLine2",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: addressLine2"
          }
        ]
      },
      {
        "id" : "Address.line.extension:addressLine2.value[x]:valueCode",
        "path" : "Address.line.extension.value[x]",
        "sliceName" : "valueCode",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "fixedCode" : "addressLine2"
      },
      {
        "id" : "Address.line.extension:street",
        "path" : "Address.line.extension",
        "sliceName" : "street",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: street"
          }
        ]
      },
      {
        "id" : "Address.line.extension:street.value[x]:valueCode",
        "path" : "Address.line.extension.value[x]",
        "sliceName" : "valueCode",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "fixedCode" : "street"
      },
      {
        "id" : "Address.line.extension:streetName",
        "path" : "Address.line.extension",
        "sliceName" : "streetName",
        "short" : "street part of the street line, e.g. withouth housenumber",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: streetName"
          }
        ]
      },
      {
        "id" : "Address.line.extension:houseNumber",
        "path" : "Address.line.extension",
        "sliceName" : "houseNumber",
        "short" : "houseNumber part of the street line",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: houseNumber"
          }
        ]
      },
      {
        "id" : "Address.line.extension:unitID",
        "path" : "Address.line.extension",
        "sliceName" : "unitID",
        "short" : "unitID, dwellingNumber part of the street line",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-unitID|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: dwellingNumber"
          }
        ]
      },
      {
        "id" : "Address.line.extension:postOfficeBoxText",
        "path" : "Address.line.extension",
        "sliceName" : "postOfficeBoxText",
        "short" : "Postbox addresses need an postbox text and optional postbox number",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-10-linetype"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: postOfficeBoxText"
          }
        ]
      },
      {
        "id" : "Address.line.extension:postOfficeBoxText.value[x]:valueCode",
        "path" : "Address.line.extension.value[x]",
        "sliceName" : "valueCode",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "fixedCode" : "postOfficeBoxText"
      },
      {
        "id" : "Address.line.extension:postOfficeBoxNumber",
        "path" : "Address.line.extension",
        "sliceName" : "postOfficeBoxNumber",
        "short" : "Optional postOfficeBoxNumber as a separate part of the postOfficeBoxText",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: postOfficeBoxNumber"
          }
        ]
      },
      {
        "id" : "Address.city",
        "path" : "Address.city",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: town"
          }
        ]
      },
      {
        "id" : "Address.city.extension",
        "path" : "Address.city.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Address.city.extension:bfs",
        "path" : "Address.city.extension",
        "sliceName" : "bfs",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-7-municipalityid"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH-0011",
            "map" : "BFS Number for municipality Switzerland"
          }
        ]
      },
      {
        "id" : "Address.district",
        "path" : "Address.district",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: locality"
          }
        ]
      },
      {
        "id" : "Address.state",
        "path" : "Address.state",
        "binding" : {
          "strength" : "example",
          "description" : "Use these values for a Swiss or Liechtenstein address",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ech-7-cantonabbreviation"
        },
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: locality"
          }
        ]
      },
      {
        "id" : "Address.postalCode",
        "path" : "Address.postalCode",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: swissZipCode, swissZipCodeAddOn, swissZipCodeId, foreignZipCode"
          }
        ]
      },
      {
        "id" : "Address.country",
        "path" : "Address.country",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0010: country"
          }
        ]
      },
      {
        "id" : "Address.country.extension",
        "path" : "Address.country.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Address.country.extension:countrycode",
        "path" : "Address.country.extension",
        "sliceName" : "countrycode",
        "short" : "ISO Country Alpha-2 or ISO Country Alpha-3 code",
        "definition" : "The content of the country code element (if present) SHALL be selected EITHER from ValueSet ISO Country Alpha-2 http://hl7.org/fhir/ValueSet/iso3166-1-2 OR MAY be selected from ISO Country Alpha-3 Value Set http://hl7.org/fhir/ValueSet/iso3166-1-3, if the country is not specified in value Set ISO Country Alpha-2 http://hl7.org/fhir/ValueSet/iso3166-1-2.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/iso21090-codedString|5.3.0-ballot-tc1"
            ]
          }
        ],
        "constraint" : [
          {
            "key" : "ch-addr-1",
            "severity" : "warning",
            "human" : "ISO Country Alpha-2 or ISO Country Alpha-3 code",
            "expression" : "((value.code.length()=2) and value.code.memberOf('http://hl7.org/fhir/ValueSet/iso3166-1-2')) or ((value.code.length() = 3) and value.code.memberOf('http://hl7.org/fhir/ValueSet/iso3166-1-3'))",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address"
          }
        ]
      }
    ]
  }
}

```
