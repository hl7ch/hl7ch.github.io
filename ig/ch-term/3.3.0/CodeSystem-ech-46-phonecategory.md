# eCH-0046 Phone Category - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-0046 Phone Category**

## CodeSystem: eCH-0046 Phone Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory | *Version*:3.3.0 |
| Active as of 2023-03-10 | *Computable Name*:ECH46PhoneCategory |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-0046 defines different types for phone categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.4.1 phoneNumberCategory 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECH46PhoneCategory](ValueSet-ech-46-phonecategory.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-46-phonecategory",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-46-phonecategory",
  "version" : "3.3.0",
  "name" : "ECH46PhoneCategory",
  "title" : "eCH-0046 Phone Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-03-10",
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
  "description" : "eCH-0046 defines different types for phone categories. See https://www.ech.ch/de/ech/ech-0046/5.0 4.4.1 phoneNumberCategory",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "1",
      "display" : "PrivatePhone",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "private Telefonnummer"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro de téléphone privé"
        }
      ]
    },
    {
      "code" : "2",
      "display" : "PrivateMobile",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "private Mobil-Nummer"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro de portable privé"
        }
      ]
    },
    {
      "code" : "3",
      "display" : "PrivateFax",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "private Fax-Nummer"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro de fax privé"
        }
      ]
    },
    {
      "code" : "4",
      "display" : "PrivateInternetVoice",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "private Internettelefonie-Nummer"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro privé de téléphonie par Internet"
        }
      ]
    },
    {
      "code" : "5",
      "display" : "BusinessCentral",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "geschäftliche Nummer (Zentrale)"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro commercial (standard)"
        }
      ]
    },
    {
      "code" : "6",
      "display" : "BusinessDirect",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "geschäftliche Nummer (Durchwahl)"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro commercial (ligne directe)"
        }
      ]
    },
    {
      "code" : "7",
      "display" : "BusinessMobile",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "geschäftliche Mobil-Nummer"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro portable commercial"
        }
      ]
    },
    {
      "code" : "8",
      "display" : "BusinessFax",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "geschäftliche Fax-Nummer"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro fax commercial"
        }
      ]
    },
    {
      "code" : "9",
      "display" : "BusinessInternetVoice",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "geschäftliche Internettelefonie-Nummer"
        },
        {
          "language" : "fr-CH",
          "value" : "numéro commercial de téléphonie par Internet"
        }
      ]
    },
    {
      "code" : "10",
      "display" : "Pager",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Pager"
        },
        {
          "language" : "fr-CH",
          "value" : "bipeur"
        }
      ]
    }
  ]
}

```
