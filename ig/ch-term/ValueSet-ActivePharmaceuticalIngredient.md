# ActivePharmaceuticalIngredient - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ActivePharmaceuticalIngredient**

## ValueSet: ActivePharmaceuticalIngredient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/ActivePharmaceuticalIngredient | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ActivePharmaceuticalIngredient |
| *Other Identifiers:*OID:2.16.756.5.30.1.1.11.82 (use: official, ) | |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
ActivePharmaceuticalIngredient 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ActivePharmaceuticalIngredient) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ActivePharmaceuticalIngredient",
  "meta" : {
    "lastUpdated" : "2024-01-30T13:57:00Z",
    "source" : "https://art-decor.org/fhir/4.0/ch-pharm-",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-10-27T13:24:37+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/ActivePharmaceuticalIngredient",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.1.11.82"
    }
  ],
  "version" : "3.3.0",
  "name" : "ActivePharmaceuticalIngredient",
  "title" : "ActivePharmaceuticalIngredient",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
  "description" : "ActivePharmaceuticalIngredient",
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
  "immutable" : false,
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "1156222009",
            "display" : "Trofosfamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trofosfamide"
              },
              {
                "language" : "fr-CH",
                "value" : "trofosfamide"
              },
              {
                "language" : "it-CH",
                "value" : "trofosfamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Trofosfamide"
              },
              {
                "language" : "en-US",
                "value" : "Trofosfamide"
              }
            ]
          },
          {
            "code" : "1156231009",
            "display" : "Obidoxime chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Obidoxim chlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "obidoxime chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "obidoxima cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Obidoxim chlorid"
              },
              {
                "language" : "en-US",
                "value" : "Obidoxime chloride"
              }
            ]
          },
          {
            "code" : "1156230005",
            "display" : "Ajmaline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ajmalin"
              },
              {
                "language" : "fr-CH",
                "value" : "ajmaline"
              },
              {
                "language" : "it-CH",
                "value" : "ajmaline"
              },
              {
                "language" : "rm-CH",
                "value" : "Ajmalin"
              },
              {
                "language" : "en-US",
                "value" : "Ajmaline"
              }
            ]
          },
          {
            "code" : "1156228008",
            "display" : "Darvadstrocel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Darvadstrocel"
              },
              {
                "language" : "fr-CH",
                "value" : "darvadstrocel"
              },
              {
                "language" : "it-CH",
                "value" : "darvadstrocel"
              },
              {
                "language" : "rm-CH",
                "value" : "Darvadstrocel"
              },
              {
                "language" : "en-US",
                "value" : "Darvadstrocel"
              }
            ]
          },
          {
            "code" : "1156227003",
            "display" : "Levomethadone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levomethadon"
              },
              {
                "language" : "fr-CH",
                "value" : "lévométhadone"
              },
              {
                "language" : "it-CH",
                "value" : "levomethadone"
              },
              {
                "language" : "rm-CH",
                "value" : "Levomethadon"
              },
              {
                "language" : "en-US",
                "value" : "Levomethadone"
              }
            ]
          },
          {
            "code" : "1156229000",
            "display" : "Butylscopolamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Butylscopolamin"
              },
              {
                "language" : "fr-CH",
                "value" : "butylscopolamine"
              },
              {
                "language" : "it-CH",
                "value" : "butilscopolamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Butylscopolamin"
              },
              {
                "language" : "en-US",
                "value" : "Butylscopolamine"
              }
            ]
          },
          {
            "code" : "1156223004",
            "display" : "Opipramol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Opipramol"
              },
              {
                "language" : "fr-CH",
                "value" : "opipramol"
              },
              {
                "language" : "it-CH",
                "value" : "opipramolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Opipramol"
              },
              {
                "language" : "en-US",
                "value" : "Opipramol"
              }
            ]
          },
          {
            "code" : "1156232002",
            "display" : "Flufenamic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flufenaminsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide flufénamique"
              },
              {
                "language" : "it-CH",
                "value" : "acido flufenamico"
              },
              {
                "language" : "rm-CH",
                "value" : "Flufenaminsäure"
              },
              {
                "language" : "en-US",
                "value" : "Flufenamic acid"
              }
            ]
          },
          {
            "code" : "259496005",
            "display" : "5-aminolevulinic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "5-Aminolevulinsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide 5-aminolévulinique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido 5-aminolevulinico"
              },
              {
                "language" : "rm-CH",
                "value" : "5-Aminolevulinsäure"
              },
              {
                "language" : "en-US",
                "value" : "5-aminolevulinic acid"
              }
            ]
          },
          {
            "code" : "387005008",
            "display" : "Abacavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Abacavir"
              },
              {
                "language" : "fr-CH",
                "value" : "abacavir"
              },
              {
                "language" : "it-CH",
                "value" : "Abacavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Abacavir"
              },
              {
                "language" : "en-US",
                "value" : "Abacavir"
              }
            ]
          },
          {
            "code" : "421777009",
            "display" : "Abatacept (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Abatacept"
              },
              {
                "language" : "fr-CH",
                "value" : "abatacept"
              },
              {
                "language" : "it-CH",
                "value" : "Abatacept"
              },
              {
                "language" : "rm-CH",
                "value" : "Abatacept"
              },
              {
                "language" : "en-US",
                "value" : "Abatacept"
              }
            ]
          },
          {
            "code" : "386951001",
            "display" : "Abciximab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Abciximab"
              },
              {
                "language" : "fr-CH",
                "value" : "abciximab"
              },
              {
                "language" : "it-CH",
                "value" : "Abciximab"
              },
              {
                "language" : "rm-CH",
                "value" : "Abciximab"
              },
              {
                "language" : "en-US",
                "value" : "Abciximab"
              }
            ]
          },
          {
            "code" : "761851004",
            "display" : "Abemaciclib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Abemaciclib"
              },
              {
                "language" : "fr-CH",
                "value" : "abémaciclib"
              },
              {
                "language" : "it-CH",
                "value" : "Abemaciclib"
              },
              {
                "language" : "rm-CH",
                "value" : "Abemaciclib"
              },
              {
                "language" : "en-US",
                "value" : "Abemaciclib"
              }
            ]
          },
          {
            "code" : "699678007",
            "display" : "Abiraterone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Abirateron"
              },
              {
                "language" : "fr-CH",
                "value" : "abiratérone"
              },
              {
                "language" : "it-CH",
                "value" : "Abiraterone"
              },
              {
                "language" : "rm-CH",
                "value" : "Abirateron"
              },
              {
                "language" : "en-US",
                "value" : "Abiraterone"
              }
            ]
          },
          {
            "code" : "391698009",
            "display" : "Acamprosate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acamprosat"
              },
              {
                "language" : "fr-CH",
                "value" : "acamprosate"
              },
              {
                "language" : "it-CH",
                "value" : "Acamprosato"
              },
              {
                "language" : "rm-CH",
                "value" : "Acamprosat"
              },
              {
                "language" : "en-US",
                "value" : "Acamprosate"
              }
            ]
          },
          {
            "code" : "386965004",
            "display" : "Acarbose (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acarbose"
              },
              {
                "language" : "fr-CH",
                "value" : "acarbose"
              },
              {
                "language" : "it-CH",
                "value" : "Acarbosio"
              },
              {
                "language" : "rm-CH",
                "value" : "Acarbose"
              },
              {
                "language" : "en-US",
                "value" : "Acarbose"
              }
            ]
          },
          {
            "code" : "391704009",
            "display" : "Acemetacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acemetacin"
              },
              {
                "language" : "fr-CH",
                "value" : "acémétacine"
              },
              {
                "language" : "it-CH",
                "value" : "Acemetacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Acemetacin"
              },
              {
                "language" : "en-US",
                "value" : "Acemetacin"
              }
            ]
          },
          {
            "code" : "387457003",
            "display" : "Acenocoumarol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acenocoumarol"
              },
              {
                "language" : "fr-CH",
                "value" : "acénocoumarol"
              },
              {
                "language" : "it-CH",
                "value" : "Acenocumarolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Acenocoumarol"
              },
              {
                "language" : "en-US",
                "value" : "Acenocoumarol"
              }
            ]
          },
          {
            "code" : "372709008",
            "display" : "Acetazolamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acetazolamid"
              },
              {
                "language" : "fr-CH",
                "value" : "acétazolamide"
              },
              {
                "language" : "it-CH",
                "value" : "Acetazolamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Acetazolamid"
              },
              {
                "language" : "en-US",
                "value" : "Acetazolamide"
              }
            ]
          },
          {
            "code" : "387440002",
            "display" : "Acetylcysteine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acetylcystein"
              },
              {
                "language" : "fr-CH",
                "value" : "acétylcystéine"
              },
              {
                "language" : "it-CH",
                "value" : "Acetilcisteina"
              },
              {
                "language" : "rm-CH",
                "value" : "Acetylcystein"
              },
              {
                "language" : "en-US",
                "value" : "Acetylcysteine"
              }
            ]
          },
          {
            "code" : "372729009",
            "display" : "Aciclovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aciclovir"
              },
              {
                "language" : "fr-CH",
                "value" : "aciclovir"
              },
              {
                "language" : "it-CH",
                "value" : "Aciclovir"
              },
              {
                "language" : "rm-CH",
                "value" : "Aciclovir"
              },
              {
                "language" : "en-US",
                "value" : "Aciclovir"
              }
            ]
          },
          {
            "code" : "391711008",
            "display" : "Acipimox (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acipimox"
              },
              {
                "language" : "fr-CH",
                "value" : "acipimox"
              },
              {
                "language" : "it-CH",
                "value" : "Acipimox"
              },
              {
                "language" : "rm-CH",
                "value" : "Acipimox"
              },
              {
                "language" : "en-US",
                "value" : "Acipimox"
              }
            ]
          },
          {
            "code" : "386938006",
            "display" : "Acitretin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acitretin"
              },
              {
                "language" : "fr-CH",
                "value" : "acitrétine"
              },
              {
                "language" : "it-CH",
                "value" : "Acitretina"
              },
              {
                "language" : "rm-CH",
                "value" : "Acitretin"
              },
              {
                "language" : "en-US",
                "value" : "Acitretin"
              }
            ]
          },
          {
            "code" : "703921008",
            "display" : "Aclidinium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aclidinium-Kation"
              },
              {
                "language" : "fr-CH",
                "value" : "aclidinium"
              },
              {
                "language" : "it-CH",
                "value" : "Aclidinio"
              },
              {
                "language" : "rm-CH",
                "value" : "Aclidinium-Kation"
              },
              {
                "language" : "en-US",
                "value" : "Aclidinium"
              }
            ]
          },
          {
            "code" : "32519007",
            "display" : "Activated charcoal (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kohle, medizinische"
              },
              {
                "language" : "fr-CH",
                "value" : "charbon activé"
              },
              {
                "language" : "it-CH",
                "value" : "Carbone attivo"
              },
              {
                "language" : "rm-CH",
                "value" : "Kohle, medizinische"
              },
              {
                "language" : "en-US",
                "value" : "Activated charcoal"
              }
            ]
          },
          {
            "code" : "407317001",
            "display" : "Adalimumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adalimumab"
              },
              {
                "language" : "fr-CH",
                "value" : "adalimumab"
              },
              {
                "language" : "it-CH",
                "value" : "Adalimumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Adalimumab"
              },
              {
                "language" : "en-US",
                "value" : "Adalimumab"
              }
            ]
          },
          {
            "code" : "386934008",
            "display" : "Adapalene (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adapalen"
              },
              {
                "language" : "fr-CH",
                "value" : "adapalène"
              },
              {
                "language" : "it-CH",
                "value" : "Adapalene"
              },
              {
                "language" : "rm-CH",
                "value" : "Adapalen"
              },
              {
                "language" : "en-US",
                "value" : "Adapalene"
              }
            ]
          },
          {
            "code" : "412072006",
            "display" : "Adefovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adefovir"
              },
              {
                "language" : "fr-CH",
                "value" : "adéfovir"
              },
              {
                "language" : "it-CH",
                "value" : "Adefovir"
              },
              {
                "language" : "rm-CH",
                "value" : "Adefovir"
              },
              {
                "language" : "en-US",
                "value" : "Adefovir"
              }
            ]
          },
          {
            "code" : "35431001",
            "display" : "Adenosine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adenosin"
              },
              {
                "language" : "fr-CH",
                "value" : "adénosine"
              },
              {
                "language" : "it-CH",
                "value" : "Adenosina"
              },
              {
                "language" : "rm-CH",
                "value" : "Adenosin"
              },
              {
                "language" : "en-US",
                "value" : "Adenosine"
              }
            ]
          },
          {
            "code" : "703579002",
            "display" : "Afatinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Afatinib"
              },
              {
                "language" : "fr-CH",
                "value" : "afatinib"
              },
              {
                "language" : "it-CH",
                "value" : "Afatinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Afatinib"
              },
              {
                "language" : "en-US",
                "value" : "Afatinib"
              }
            ]
          },
          {
            "code" : "703840003",
            "display" : "Aflibercept (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aflibercept"
              },
              {
                "language" : "fr-CH",
                "value" : "aflibercept"
              },
              {
                "language" : "it-CH",
                "value" : "Aflibercept"
              },
              {
                "language" : "rm-CH",
                "value" : "Aflibercept"
              },
              {
                "language" : "en-US",
                "value" : "Aflibercept"
              }
            ]
          },
          {
            "code" : "424905009",
            "display" : "Agalsidase alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Agalsidase alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "agalsidase alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Agalsidasi alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Agalsidase alfa"
              },
              {
                "language" : "en-US",
                "value" : "Agalsidase alfa"
              }
            ]
          },
          {
            "code" : "424725004",
            "display" : "Agalsidase beta (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Agalsidase beta"
              },
              {
                "language" : "fr-CH",
                "value" : "agalsidase bêta"
              },
              {
                "language" : "it-CH",
                "value" : "Agalsidasi beta"
              },
              {
                "language" : "rm-CH",
                "value" : "Agalsidase beta"
              },
              {
                "language" : "en-US",
                "value" : "Agalsidase beta"
              }
            ]
          },
          {
            "code" : "698012009",
            "display" : "Agomelatine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Agomelatin"
              },
              {
                "language" : "fr-CH",
                "value" : "agomélatine"
              },
              {
                "language" : "it-CH",
                "value" : "Agomelatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Agomelatin"
              },
              {
                "language" : "en-US",
                "value" : "Agomelatine"
              }
            ]
          },
          {
            "code" : "58753009",
            "display" : "Alanine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alanin"
              },
              {
                "language" : "fr-CH",
                "value" : "alanine"
              },
              {
                "language" : "it-CH",
                "value" : "Alanina"
              },
              {
                "language" : "rm-CH",
                "value" : "Alanin"
              },
              {
                "language" : "en-US",
                "value" : "Alanine"
              }
            ]
          },
          {
            "code" : "703391005",
            "display" : "Alanylglutamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alanyl glutamin"
              },
              {
                "language" : "fr-CH",
                "value" : "alanyl glutamine"
              },
              {
                "language" : "it-CH",
                "value" : "Alanil glutammina"
              },
              {
                "language" : "rm-CH",
                "value" : "Alanyl glutamin"
              },
              {
                "language" : "en-US",
                "value" : "Alanylglutamine"
              }
            ]
          },
          {
            "code" : "387558006",
            "display" : "Albendazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Albendazol"
              },
              {
                "language" : "fr-CH",
                "value" : "albendazole"
              },
              {
                "language" : "it-CH",
                "value" : "Albendazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Albendazol"
              },
              {
                "language" : "en-US",
                "value" : "Albendazole"
              }
            ]
          },
          {
            "code" : "703129009",
            "display" : "Albiglutide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Albiglutid"
              },
              {
                "language" : "fr-CH",
                "value" : "albiglutide"
              },
              {
                "language" : "it-CH",
                "value" : "Albiglutide"
              },
              {
                "language" : "rm-CH",
                "value" : "Albiglutid"
              },
              {
                "language" : "en-US",
                "value" : "Albiglutide"
              }
            ]
          },
          {
            "code" : "52454007",
            "display" : "Albumin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Albumine"
              },
              {
                "language" : "fr-CH",
                "value" : "albumine"
              },
              {
                "language" : "it-CH",
                "value" : "Albumina"
              },
              {
                "language" : "rm-CH",
                "value" : "Albumine"
              },
              {
                "language" : "en-US",
                "value" : "Albumin"
              }
            ]
          },
          {
            "code" : "718928008",
            "display" : "Albutrepenonacog alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Albutrepenonacog alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "albutrépénonacog alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Albutrepenonacog alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Albutrepenonacog alfa"
              },
              {
                "language" : "en-US",
                "value" : "Albutrepenonacog alfa"
              }
            ]
          },
          {
            "code" : "53041004",
            "display" : "Alcohol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ethanol"
              },
              {
                "language" : "fr-CH",
                "value" : "éthanol"
              },
              {
                "language" : "it-CH",
                "value" : "Alcol etilico"
              },
              {
                "language" : "rm-CH",
                "value" : "Ethanol"
              },
              {
                "language" : "en-US",
                "value" : "Alcohol"
              }
            ]
          },
          {
            "code" : "386917000",
            "display" : "Aldesleukin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aldesleukin"
              },
              {
                "language" : "fr-CH",
                "value" : "aldesleukine"
              },
              {
                "language" : "it-CH",
                "value" : "Aldesleuchina"
              },
              {
                "language" : "rm-CH",
                "value" : "Aldesleukin"
              },
              {
                "language" : "en-US",
                "value" : "Aldesleukin"
              }
            ]
          },
          {
            "code" : "716039000",
            "display" : "Alectinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alectinib"
              },
              {
                "language" : "fr-CH",
                "value" : "alectinib"
              },
              {
                "language" : "it-CH",
                "value" : "Alectinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Alectinib"
              },
              {
                "language" : "en-US",
                "value" : "Alectinib"
              }
            ]
          },
          {
            "code" : "129472003",
            "display" : "Alemtuzumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alemtuzumab"
              },
              {
                "language" : "fr-CH",
                "value" : "alemtuzumab"
              },
              {
                "language" : "it-CH",
                "value" : "Alemtuzumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Alemtuzumab"
              },
              {
                "language" : "en-US",
                "value" : "Alemtuzumab"
              }
            ]
          },
          {
            "code" : "391730008",
            "display" : "Alendronic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alendronsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide alendronique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido Alendronico"
              },
              {
                "language" : "rm-CH",
                "value" : "Alendronsäure"
              },
              {
                "language" : "en-US",
                "value" : "Alendronic acid"
              }
            ]
          },
          {
            "code" : "387560008",
            "display" : "Alfentanil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alfentanil"
              },
              {
                "language" : "fr-CH",
                "value" : "alfentanil"
              },
              {
                "language" : "it-CH",
                "value" : "Alfentanil"
              },
              {
                "language" : "rm-CH",
                "value" : "Alfentanil"
              },
              {
                "language" : "en-US",
                "value" : "Alfentanil"
              }
            ]
          },
          {
            "code" : "395954002",
            "display" : "Alfuzosin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alfuzosin"
              },
              {
                "language" : "fr-CH",
                "value" : "alfuzosine"
              },
              {
                "language" : "it-CH",
                "value" : "Alfuzosina"
              },
              {
                "language" : "rm-CH",
                "value" : "Alfuzosin"
              },
              {
                "language" : "en-US",
                "value" : "Alfuzosin"
              }
            ]
          },
          {
            "code" : "715186005",
            "display" : "Alirocumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alirocumab"
              },
              {
                "language" : "fr-CH",
                "value" : "alirocumab"
              },
              {
                "language" : "it-CH",
                "value" : "Alirocumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Alirocumab"
              },
              {
                "language" : "en-US",
                "value" : "Alirocumab"
              }
            ]
          },
          {
            "code" : "426725002",
            "display" : "Aliskiren (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aliskiren"
              },
              {
                "language" : "fr-CH",
                "value" : "aliskirène"
              },
              {
                "language" : "it-CH",
                "value" : "Aliskiren"
              },
              {
                "language" : "rm-CH",
                "value" : "Aliskiren"
              },
              {
                "language" : "en-US",
                "value" : "Aliskiren"
              }
            ]
          },
          {
            "code" : "387135004",
            "display" : "Allopurinol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Allopurinol"
              },
              {
                "language" : "fr-CH",
                "value" : "allopurinol"
              },
              {
                "language" : "it-CH",
                "value" : "Allopurinolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Allopurinol"
              },
              {
                "language" : "en-US",
                "value" : "Allopurinol"
              }
            ]
          },
          {
            "code" : "363569003",
            "display" : "Almotriptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Almotriptan"
              },
              {
                "language" : "fr-CH",
                "value" : "almotriptan"
              },
              {
                "language" : "it-CH",
                "value" : "Almotriptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Almotriptan"
              },
              {
                "language" : "en-US",
                "value" : "Almotriptan"
              }
            ]
          },
          {
            "code" : "702799001",
            "display" : "Alogliptin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alogliptin"
              },
              {
                "language" : "fr-CH",
                "value" : "alogliptine"
              },
              {
                "language" : "it-CH",
                "value" : "Alogliptin"
              },
              {
                "language" : "rm-CH",
                "value" : "Alogliptin"
              },
              {
                "language" : "en-US",
                "value" : "Alogliptin"
              }
            ]
          },
          {
            "code" : "386983007",
            "display" : "Alprazolam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alprazolam"
              },
              {
                "language" : "fr-CH",
                "value" : "alprazolam"
              },
              {
                "language" : "it-CH",
                "value" : "Alprazolam"
              },
              {
                "language" : "rm-CH",
                "value" : "Alprazolam"
              },
              {
                "language" : "en-US",
                "value" : "Alprazolam"
              }
            ]
          },
          {
            "code" : "48988008",
            "display" : "Alprostadil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alprostadil"
              },
              {
                "language" : "fr-CH",
                "value" : "alprostadil"
              },
              {
                "language" : "it-CH",
                "value" : "Alprostadil"
              },
              {
                "language" : "rm-CH",
                "value" : "Alprostadil"
              },
              {
                "language" : "en-US",
                "value" : "Alprostadil"
              }
            ]
          },
          {
            "code" : "387152000",
            "display" : "Alteplase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Alteplase"
              },
              {
                "language" : "fr-CH",
                "value" : "altéplase"
              },
              {
                "language" : "it-CH",
                "value" : "Alteplase"
              },
              {
                "language" : "rm-CH",
                "value" : "Alteplase"
              },
              {
                "language" : "en-US",
                "value" : "Alteplase"
              }
            ]
          },
          {
            "code" : "273944007",
            "display" : "Aluminium hydroxide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aluminiumoxid, wasserhaltig (Algeldrat)"
              },
              {
                "language" : "fr-CH",
                "value" : "aluminium oxyde hydrate (algeldrate)"
              },
              {
                "language" : "it-CH",
                "value" : "Idrossido di alluminio"
              },
              {
                "language" : "rm-CH",
                "value" : "Aluminiumoxid, wasserhaltig (Algeldrat)"
              },
              {
                "language" : "en-US",
                "value" : "Aluminium hydroxide"
              }
            ]
          },
          {
            "code" : "372763006",
            "display" : "Amantadine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amantadin"
              },
              {
                "language" : "fr-CH",
                "value" : "amantadine"
              },
              {
                "language" : "it-CH",
                "value" : "Amantadina"
              },
              {
                "language" : "rm-CH",
                "value" : "Amantadin"
              },
              {
                "language" : "en-US",
                "value" : "Amantadine"
              }
            ]
          },
          {
            "code" : "428159003",
            "display" : "Ambrisentan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ambrisentan"
              },
              {
                "language" : "fr-CH",
                "value" : "ambrisentan"
              },
              {
                "language" : "it-CH",
                "value" : "Ambrisentan"
              },
              {
                "language" : "rm-CH",
                "value" : "Ambrisentan"
              },
              {
                "language" : "en-US",
                "value" : "Ambrisentan"
              }
            ]
          },
          {
            "code" : "698024002",
            "display" : "Ambroxol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ambroxol"
              },
              {
                "language" : "fr-CH",
                "value" : "ambroxol"
              },
              {
                "language" : "it-CH",
                "value" : "Ambroxolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Ambroxol"
              },
              {
                "language" : "en-US",
                "value" : "Ambroxol"
              }
            ]
          },
          {
            "code" : "387266001",
            "display" : "Amikacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amikacin"
              },
              {
                "language" : "fr-CH",
                "value" : "amikacine"
              },
              {
                "language" : "it-CH",
                "value" : "Amikacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Amikacin"
              },
              {
                "language" : "en-US",
                "value" : "Amikacin"
              }
            ]
          },
          {
            "code" : "387503008",
            "display" : "Amiloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amilorid"
              },
              {
                "language" : "fr-CH",
                "value" : "amiloride"
              },
              {
                "language" : "it-CH",
                "value" : "Amiloride"
              },
              {
                "language" : "rm-CH",
                "value" : "Amilorid"
              },
              {
                "language" : "en-US",
                "value" : "Amiloride"
              }
            ]
          },
          {
            "code" : "373508009",
            "display" : "Aminophylline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aminophyllin"
              },
              {
                "language" : "fr-CH",
                "value" : "aminophylline"
              },
              {
                "language" : "it-CH",
                "value" : "Aminofillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Aminophyllin"
              },
              {
                "language" : "en-US",
                "value" : "Aminophylline"
              }
            ]
          },
          {
            "code" : "372821002",
            "display" : "Amiodarone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amiodaron"
              },
              {
                "language" : "fr-CH",
                "value" : "amiodarone"
              },
              {
                "language" : "it-CH",
                "value" : "Amiodarone"
              },
              {
                "language" : "rm-CH",
                "value" : "Amiodaron"
              },
              {
                "language" : "en-US",
                "value" : "Amiodarone"
              }
            ]
          },
          {
            "code" : "391761004",
            "display" : "Amisulpride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amisulprid"
              },
              {
                "language" : "fr-CH",
                "value" : "amisulpride"
              },
              {
                "language" : "it-CH",
                "value" : "Amisulpride"
              },
              {
                "language" : "rm-CH",
                "value" : "Amisulprid"
              },
              {
                "language" : "en-US",
                "value" : "Amisulpride"
              }
            ]
          },
          {
            "code" : "372726002",
            "display" : "Amitriptyline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amitriptylin"
              },
              {
                "language" : "fr-CH",
                "value" : "amitriptyline"
              },
              {
                "language" : "it-CH",
                "value" : "Amitriptilina"
              },
              {
                "language" : "rm-CH",
                "value" : "Amitriptylin"
              },
              {
                "language" : "en-US",
                "value" : "Amitriptyline"
              }
            ]
          },
          {
            "code" : "386864001",
            "display" : "Amlodipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amlodipin"
              },
              {
                "language" : "fr-CH",
                "value" : "amlodipine"
              },
              {
                "language" : "it-CH",
                "value" : "Amlodipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Amlodipin"
              },
              {
                "language" : "en-US",
                "value" : "Amlodipine"
              }
            ]
          },
          {
            "code" : "391769002",
            "display" : "Amorolfine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amorolfin"
              },
              {
                "language" : "fr-CH",
                "value" : "amorolfine"
              },
              {
                "language" : "it-CH",
                "value" : "Amorolfina"
              },
              {
                "language" : "rm-CH",
                "value" : "Amorolfin"
              },
              {
                "language" : "en-US",
                "value" : "Amorolfine"
              }
            ]
          },
          {
            "code" : "372687004",
            "display" : "Amoxicillin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amoxicillin"
              },
              {
                "language" : "fr-CH",
                "value" : "amoxicilline"
              },
              {
                "language" : "it-CH",
                "value" : "Amoxicillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Amoxicillin"
              },
              {
                "language" : "en-US",
                "value" : "Amoxicillin"
              }
            ]
          },
          {
            "code" : "427483001",
            "display" : "Amoxicillin sodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amoxicillin-Natrium"
              },
              {
                "language" : "fr-CH",
                "value" : "amoxicilline sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Amoxicillina sodica"
              },
              {
                "language" : "rm-CH",
                "value" : "Amoxicillin-Natrium"
              },
              {
                "language" : "en-US",
                "value" : "Amoxicillin sodium"
              }
            ]
          },
          {
            "code" : "96068000",
            "display" : "Amoxicillin trihydrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amoxicillin-3-Wasser"
              },
              {
                "language" : "fr-CH",
                "value" : "amoxicilline trihydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Amoxicillina triidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Amoxicillin-3-Wasser"
              },
              {
                "language" : "en-US",
                "value" : "Amoxicillin trihydrate"
              }
            ]
          },
          {
            "code" : "77703004",
            "display" : "Amphotericin B (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amphotericin B"
              },
              {
                "language" : "fr-CH",
                "value" : "amphotéricine B"
              },
              {
                "language" : "it-CH",
                "value" : "Amfotericina B"
              },
              {
                "language" : "rm-CH",
                "value" : "Amphotericin B"
              },
              {
                "language" : "en-US",
                "value" : "Amphotericin B"
              }
            ]
          },
          {
            "code" : "387170002",
            "display" : "Ampicillin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ampicillin"
              },
              {
                "language" : "fr-CH",
                "value" : "ampicilline"
              },
              {
                "language" : "it-CH",
                "value" : "Ampicillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ampicillin"
              },
              {
                "language" : "en-US",
                "value" : "Ampicillin"
              }
            ]
          },
          {
            "code" : "387031005",
            "display" : "Amylase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amylase"
              },
              {
                "language" : "fr-CH",
                "value" : "amylase"
              },
              {
                "language" : "it-CH",
                "value" : "Amilasi"
              },
              {
                "language" : "rm-CH",
                "value" : "Amylase"
              },
              {
                "language" : "en-US",
                "value" : "Amylase"
              }
            ]
          },
          {
            "code" : "372561005",
            "display" : "Anagrelide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anagrelid"
              },
              {
                "language" : "fr-CH",
                "value" : "anagrélide"
              },
              {
                "language" : "it-CH",
                "value" : "Anagrelide"
              },
              {
                "language" : "rm-CH",
                "value" : "Anagrelid"
              },
              {
                "language" : "en-US",
                "value" : "Anagrelide"
              }
            ]
          },
          {
            "code" : "385549000",
            "display" : "Anakinra (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anakinra"
              },
              {
                "language" : "fr-CH",
                "value" : "anakinra"
              },
              {
                "language" : "it-CH",
                "value" : "Anakinra"
              },
              {
                "language" : "rm-CH",
                "value" : "Anakinra"
              },
              {
                "language" : "en-US",
                "value" : "Anakinra"
              }
            ]
          },
          {
            "code" : "386910003",
            "display" : "Anastrozole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anastrozol"
              },
              {
                "language" : "fr-CH",
                "value" : "anastrozole"
              },
              {
                "language" : "it-CH",
                "value" : "Anastrozolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Anastrozol"
              },
              {
                "language" : "en-US",
                "value" : "Anastrozole"
              }
            ]
          },
          {
            "code" : "703112006",
            "display" : "Anetholtrithion (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anetholtrithion"
              },
              {
                "language" : "fr-CH",
                "value" : "anétholtrithione"
              },
              {
                "language" : "it-CH",
                "value" : "Anetoltritione"
              },
              {
                "language" : "rm-CH",
                "value" : "Anetholtrithion"
              },
              {
                "language" : "en-US",
                "value" : "Anetholtrithion"
              }
            ]
          },
          {
            "code" : "422157006",
            "display" : "Anidulafungin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anidulafungin"
              },
              {
                "language" : "fr-CH",
                "value" : "anidulafungine"
              },
              {
                "language" : "it-CH",
                "value" : "Anidulafungina"
              },
              {
                "language" : "rm-CH",
                "value" : "Anidulafungin"
              },
              {
                "language" : "en-US",
                "value" : "Anidulafungin"
              }
            ]
          },
          {
            "code" : "373544004",
            "display" : "Antazoline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antazolin"
              },
              {
                "language" : "fr-CH",
                "value" : "antazoline"
              },
              {
                "language" : "it-CH",
                "value" : "Antazolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Antazolin"
              },
              {
                "language" : "en-US",
                "value" : "Antazoline"
              }
            ]
          },
          {
            "code" : "391784006",
            "display" : "Antilymphocyte immunoglobulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunglobuline anti-Lymphozyten human"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline anti-lymphocytes humains"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina anti-linfociti T umani"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunglobuline anti-Lymphozyten human"
              },
              {
                "language" : "en-US",
                "value" : "Antilymphocyte immunoglobulin"
              }
            ]
          },
          {
            "code" : "768651008",
            "display" : "Antithymocyte immunoglobulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunglobulin anti-T-Lymphozyten human"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline anti lymphocytes T humains"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina antitimociti umani"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunglobulin anti-T-Lymphozyten human"
              },
              {
                "language" : "en-US",
                "value" : "Antithymocyte immunoglobulin"
              }
            ]
          },
          {
            "code" : "698090000",
            "display" : "Apixaban (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Apixaban"
              },
              {
                "language" : "fr-CH",
                "value" : "apixaban"
              },
              {
                "language" : "it-CH",
                "value" : "Apixaban"
              },
              {
                "language" : "rm-CH",
                "value" : "Apixaban"
              },
              {
                "language" : "en-US",
                "value" : "Apixaban"
              }
            ]
          },
          {
            "code" : "387375001",
            "display" : "Apomorphine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Apomorphin"
              },
              {
                "language" : "fr-CH",
                "value" : "apomorphine"
              },
              {
                "language" : "it-CH",
                "value" : "Apomorfina"
              },
              {
                "language" : "rm-CH",
                "value" : "Apomorphin"
              },
              {
                "language" : "en-US",
                "value" : "Apomorphine"
              }
            ]
          },
          {
            "code" : "409205009",
            "display" : "Aprepitant (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aprepitant"
              },
              {
                "language" : "fr-CH",
                "value" : "aprépitant"
              },
              {
                "language" : "it-CH",
                "value" : "Aprepitant"
              },
              {
                "language" : "rm-CH",
                "value" : "Aprepitant"
              },
              {
                "language" : "en-US",
                "value" : "Aprepitant"
              }
            ]
          },
          {
            "code" : "386961008",
            "display" : "Aprotinin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aprotinin"
              },
              {
                "language" : "fr-CH",
                "value" : "aprotinine"
              },
              {
                "language" : "it-CH",
                "value" : "Aprotinina"
              },
              {
                "language" : "rm-CH",
                "value" : "Aprotinin"
              },
              {
                "language" : "en-US",
                "value" : "Aprotinin"
              }
            ]
          },
          {
            "code" : "116508003",
            "display" : "Argatroban (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Argatroban"
              },
              {
                "language" : "fr-CH",
                "value" : "argatroban"
              },
              {
                "language" : "it-CH",
                "value" : "Argatroban"
              },
              {
                "language" : "rm-CH",
                "value" : "Argatroban"
              },
              {
                "language" : "en-US",
                "value" : "Argatroban"
              }
            ]
          },
          {
            "code" : "52625008",
            "display" : "Arginine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Arginin"
              },
              {
                "language" : "fr-CH",
                "value" : "arginine"
              },
              {
                "language" : "it-CH",
                "value" : "Arginina"
              },
              {
                "language" : "rm-CH",
                "value" : "Arginin"
              },
              {
                "language" : "en-US",
                "value" : "Arginine"
              }
            ]
          },
          {
            "code" : "421078009",
            "display" : "Argipressin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Argipressin (Vasopressin)"
              },
              {
                "language" : "fr-CH",
                "value" : "argipressine (Vasopressine)"
              },
              {
                "language" : "it-CH",
                "value" : "Argipressina (Vasopressina)"
              },
              {
                "language" : "rm-CH",
                "value" : "Argipressin (Vasopressin)"
              },
              {
                "language" : "en-US",
                "value" : "Argipressin"
              }
            ]
          },
          {
            "code" : "406784005",
            "display" : "Aripiprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aripiprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "aripiprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Aripirazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Aripiprazol"
              },
              {
                "language" : "en-US",
                "value" : "Aripiprazole"
              }
            ]
          },
          {
            "code" : "72251000",
            "display" : "Arsenic trioxide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Arsentrioxid"
              },
              {
                "language" : "fr-CH",
                "value" : "trioxyde d'arsenic"
              },
              {
                "language" : "it-CH",
                "value" : "Arsenico triossido"
              },
              {
                "language" : "rm-CH",
                "value" : "Arsentrioxid"
              },
              {
                "language" : "en-US",
                "value" : "Arsenic trioxide"
              }
            ]
          },
          {
            "code" : "420578008",
            "display" : "Artemether (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Artemether"
              },
              {
                "language" : "fr-CH",
                "value" : "artéméther"
              },
              {
                "language" : "it-CH",
                "value" : "Artemetere"
              },
              {
                "language" : "rm-CH",
                "value" : "Artemether"
              },
              {
                "language" : "en-US",
                "value" : "Artemether"
              }
            ]
          },
          {
            "code" : "432410005",
            "display" : "Artesunate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Artesunat"
              },
              {
                "language" : "fr-CH",
                "value" : "artésunate"
              },
              {
                "language" : "it-CH",
                "value" : "Artesunato"
              },
              {
                "language" : "rm-CH",
                "value" : "Artesunat"
              },
              {
                "language" : "en-US",
                "value" : "Artesunate"
              }
            ]
          },
          {
            "code" : "703107005",
            "display" : "Articaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Articain"
              },
              {
                "language" : "fr-CH",
                "value" : "articaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Articaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Articain"
              },
              {
                "language" : "en-US",
                "value" : "Articaine"
              }
            ]
          },
          {
            "code" : "43706004",
            "display" : "Ascorbic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ascorbinsäure (Vitamin C, E300)"
              },
              {
                "language" : "fr-CH",
                "value" : "acide ascorbique (Vitamine C, E300)"
              },
              {
                "language" : "it-CH",
                "value" : "Acido ascorbico (Vitamina C, E300)"
              },
              {
                "language" : "rm-CH",
                "value" : "Ascorbinsäure (Vitamin C, E300)"
              },
              {
                "language" : "en-US",
                "value" : "Ascorbic acid"
              }
            ]
          },
          {
            "code" : "371014004",
            "display" : "Asparaginase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Asparaginase"
              },
              {
                "language" : "fr-CH",
                "value" : "asparaginase"
              },
              {
                "language" : "it-CH",
                "value" : "Asparaginasi"
              },
              {
                "language" : "rm-CH",
                "value" : "Asparaginase"
              },
              {
                "language" : "en-US",
                "value" : "Asparaginase"
              }
            ]
          },
          {
            "code" : "44970006",
            "display" : "Aspartic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aspartinsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide aspartique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido aspartico"
              },
              {
                "language" : "rm-CH",
                "value" : "Aspartinsäure"
              },
              {
                "language" : "en-US",
                "value" : "Aspartic acid"
              }
            ]
          },
          {
            "code" : "387458008",
            "display" : "Aspirin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Acetylsalicylsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide acétylsalicylique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido acetilsalicilico"
              },
              {
                "language" : "rm-CH",
                "value" : "Acetylsalicylsäure"
              },
              {
                "language" : "en-US",
                "value" : "Aspirin"
              }
            ]
          },
          {
            "code" : "413592000",
            "display" : "Atazanavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atazanavir"
              },
              {
                "language" : "fr-CH",
                "value" : "atazanavir"
              },
              {
                "language" : "it-CH",
                "value" : "Atazanavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Atazanavir"
              },
              {
                "language" : "en-US",
                "value" : "Atazanavir"
              }
            ]
          },
          {
            "code" : "387506000",
            "display" : "Atenolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atenolol"
              },
              {
                "language" : "fr-CH",
                "value" : "aténolol"
              },
              {
                "language" : "it-CH",
                "value" : "Atenololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Atenolol"
              },
              {
                "language" : "en-US",
                "value" : "Atenolol"
              }
            ]
          },
          {
            "code" : "719371003",
            "display" : "Atezolizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atezolizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "atézolizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Atezolizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Atezolizumab"
              },
              {
                "language" : "en-US",
                "value" : "Atezolizumab"
              }
            ]
          },
          {
            "code" : "407037005",
            "display" : "Atomoxetine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atomoxetin"
              },
              {
                "language" : "fr-CH",
                "value" : "atomoxétine"
              },
              {
                "language" : "it-CH",
                "value" : "Atomoxetina"
              },
              {
                "language" : "rm-CH",
                "value" : "Atomoxetin"
              },
              {
                "language" : "en-US",
                "value" : "Atomoxetine"
              }
            ]
          },
          {
            "code" : "373444002",
            "display" : "Atorvastatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atorvastatin"
              },
              {
                "language" : "fr-CH",
                "value" : "atorvastatine"
              },
              {
                "language" : "it-CH",
                "value" : "Atorvastatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Atorvastatin"
              },
              {
                "language" : "en-US",
                "value" : "Atorvastatin"
              }
            ]
          },
          {
            "code" : "391792002",
            "display" : "Atosiban (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atosiban"
              },
              {
                "language" : "fr-CH",
                "value" : "atosiban"
              },
              {
                "language" : "it-CH",
                "value" : "Atosiban"
              },
              {
                "language" : "rm-CH",
                "value" : "Atosiban"
              },
              {
                "language" : "en-US",
                "value" : "Atosiban"
              }
            ]
          },
          {
            "code" : "386899002",
            "display" : "Atovaquone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atovaquon"
              },
              {
                "language" : "fr-CH",
                "value" : "atovaquone"
              },
              {
                "language" : "it-CH",
                "value" : "Atovaquone"
              },
              {
                "language" : "rm-CH",
                "value" : "Atovaquon"
              },
              {
                "language" : "en-US",
                "value" : "Atovaquone"
              }
            ]
          },
          {
            "code" : "372835000",
            "display" : "Atracurium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atracurium"
              },
              {
                "language" : "fr-CH",
                "value" : "atracurium"
              },
              {
                "language" : "it-CH",
                "value" : "Atracurio"
              },
              {
                "language" : "rm-CH",
                "value" : "Atracurium"
              },
              {
                "language" : "en-US",
                "value" : "Atracurium"
              }
            ]
          },
          {
            "code" : "372832002",
            "display" : "Atropine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atropin"
              },
              {
                "language" : "fr-CH",
                "value" : "atropine"
              },
              {
                "language" : "it-CH",
                "value" : "Atropina"
              },
              {
                "language" : "rm-CH",
                "value" : "Atropin"
              },
              {
                "language" : "en-US",
                "value" : "Atropine"
              }
            ]
          },
          {
            "code" : "703956007",
            "display" : "Avanafil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Avanafil"
              },
              {
                "language" : "fr-CH",
                "value" : "avanafil"
              },
              {
                "language" : "it-CH",
                "value" : "Avafanil"
              },
              {
                "language" : "rm-CH",
                "value" : "Avanafil"
              },
              {
                "language" : "en-US",
                "value" : "Avanafil"
              }
            ]
          },
          {
            "code" : "733055009",
            "display" : "Avelumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Avelumab"
              },
              {
                "language" : "fr-CH",
                "value" : "avélumab"
              },
              {
                "language" : "it-CH",
                "value" : "Avelumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Avelumab"
              },
              {
                "language" : "en-US",
                "value" : "Avelumab"
              }
            ]
          },
          {
            "code" : "412328000",
            "display" : "Azacitidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Azacitidin"
              },
              {
                "language" : "fr-CH",
                "value" : "azacitidine"
              },
              {
                "language" : "it-CH",
                "value" : "Azacitidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Azacitidin"
              },
              {
                "language" : "en-US",
                "value" : "Azacitidine"
              }
            ]
          },
          {
            "code" : "372574004",
            "display" : "Azathioprine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Azathioprin"
              },
              {
                "language" : "fr-CH",
                "value" : "azathioprine"
              },
              {
                "language" : "it-CH",
                "value" : "Azatioprina"
              },
              {
                "language" : "rm-CH",
                "value" : "Azathioprin"
              },
              {
                "language" : "en-US",
                "value" : "Azathioprine"
              }
            ]
          },
          {
            "code" : "386936005",
            "display" : "Azelaic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Azelainsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide azélaïque"
              },
              {
                "language" : "it-CH",
                "value" : "Acido azelaico"
              },
              {
                "language" : "rm-CH",
                "value" : "Azelainsäure"
              },
              {
                "language" : "en-US",
                "value" : "Azelaic acid"
              }
            ]
          },
          {
            "code" : "372520005",
            "display" : "Azelastine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Azelastin"
              },
              {
                "language" : "fr-CH",
                "value" : "azélastine"
              },
              {
                "language" : "it-CH",
                "value" : "Azelastina"
              },
              {
                "language" : "rm-CH",
                "value" : "Azelastin"
              },
              {
                "language" : "en-US",
                "value" : "Azelastine"
              }
            ]
          },
          {
            "code" : "387531004",
            "display" : "Azithromycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Azithromycin"
              },
              {
                "language" : "fr-CH",
                "value" : "azithromycine"
              },
              {
                "language" : "it-CH",
                "value" : "Azitromicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Azithromycin"
              },
              {
                "language" : "en-US",
                "value" : "Azithromycin"
              }
            ]
          },
          {
            "code" : "387386004",
            "display" : "Aztreonam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aztreonam"
              },
              {
                "language" : "fr-CH",
                "value" : "aztréonam"
              },
              {
                "language" : "it-CH",
                "value" : "Aztreonam"
              },
              {
                "language" : "rm-CH",
                "value" : "Aztreonam"
              },
              {
                "language" : "en-US",
                "value" : "Aztreonam"
              }
            ]
          },
          {
            "code" : "5220000",
            "display" : "Bacitracin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bacitracin"
              },
              {
                "language" : "fr-CH",
                "value" : "bacitracine"
              },
              {
                "language" : "it-CH",
                "value" : "Bacitracina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bacitracin"
              },
              {
                "language" : "en-US",
                "value" : "Bacitracin"
              }
            ]
          },
          {
            "code" : "387342009",
            "display" : "Baclofen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Baclofen"
              },
              {
                "language" : "fr-CH",
                "value" : "baclofène"
              },
              {
                "language" : "it-CH",
                "value" : "Baclofene"
              },
              {
                "language" : "rm-CH",
                "value" : "Baclofen"
              },
              {
                "language" : "en-US",
                "value" : "Baclofen"
              }
            ]
          },
          {
            "code" : "386978004",
            "display" : "Basiliximab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Basiliximab"
              },
              {
                "language" : "fr-CH",
                "value" : "basiliximab"
              },
              {
                "language" : "it-CH",
                "value" : "Basiliximab"
              },
              {
                "language" : "rm-CH",
                "value" : "Basiliximab"
              },
              {
                "language" : "en-US",
                "value" : "Basiliximab"
              }
            ]
          },
          {
            "code" : "116574000",
            "display" : "Beclometasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Beclometason"
              },
              {
                "language" : "fr-CH",
                "value" : "béclométasone"
              },
              {
                "language" : "it-CH",
                "value" : "Beclometasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Beclometason"
              },
              {
                "language" : "en-US",
                "value" : "Beclometasone"
              }
            ]
          },
          {
            "code" : "116575004",
            "display" : "Beclometasone dipropionate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Beclometason dipropionat"
              },
              {
                "language" : "fr-CH",
                "value" : "béclométasone dipropionate"
              },
              {
                "language" : "it-CH",
                "value" : "Beclometasone dipropionato"
              },
              {
                "language" : "rm-CH",
                "value" : "Beclometason dipropionat"
              },
              {
                "language" : "en-US",
                "value" : "Beclometasone dipropionate"
              }
            ]
          },
          {
            "code" : "713475001",
            "display" : "Belatacept (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Belatacept"
              },
              {
                "language" : "fr-CH",
                "value" : "bélatacept"
              },
              {
                "language" : "it-CH",
                "value" : "Belatacept"
              },
              {
                "language" : "rm-CH",
                "value" : "Belatacept"
              },
              {
                "language" : "en-US",
                "value" : "Belatacept"
              }
            ]
          },
          {
            "code" : "449043000",
            "display" : "Belimumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Belimumab"
              },
              {
                "language" : "fr-CH",
                "value" : "bélimumab"
              },
              {
                "language" : "it-CH",
                "value" : "Belimumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Belimumab"
              },
              {
                "language" : "en-US",
                "value" : "Belimumab"
              }
            ]
          },
          {
            "code" : "372511001",
            "display" : "Benazepril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Benazepril"
              },
              {
                "language" : "fr-CH",
                "value" : "bénazépril"
              },
              {
                "language" : "it-CH",
                "value" : "Benazepril"
              },
              {
                "language" : "rm-CH",
                "value" : "Benazepril"
              },
              {
                "language" : "en-US",
                "value" : "Benazepril"
              }
            ]
          },
          {
            "code" : "428012008",
            "display" : "Bendamustine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bendamustin"
              },
              {
                "language" : "fr-CH",
                "value" : "bendamustine"
              },
              {
                "language" : "it-CH",
                "value" : "Bendamustina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bendamustin"
              },
              {
                "language" : "en-US",
                "value" : "Bendamustine"
              }
            ]
          },
          {
            "code" : "391821005",
            "display" : "Benserazide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Benserazid"
              },
              {
                "language" : "fr-CH",
                "value" : "bensérazide"
              },
              {
                "language" : "it-CH",
                "value" : "Benserazide"
              },
              {
                "language" : "rm-CH",
                "value" : "Benserazid"
              },
              {
                "language" : "en-US",
                "value" : "Benserazide"
              }
            ]
          },
          {
            "code" : "387357002",
            "display" : "Benzocaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Benzocain"
              },
              {
                "language" : "fr-CH",
                "value" : "benzocaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Benzocaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Benzocain"
              },
              {
                "language" : "en-US",
                "value" : "Benzocaine"
              }
            ]
          },
          {
            "code" : "421319000",
            "display" : "Benzydamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Benzydamin"
              },
              {
                "language" : "fr-CH",
                "value" : "benzydamine"
              },
              {
                "language" : "it-CH",
                "value" : "Benzidamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Benzydamin"
              },
              {
                "language" : "en-US",
                "value" : "Benzydamine"
              }
            ]
          },
          {
            "code" : "323389000",
            "display" : "Benzylpenicillin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Benzylpenicillin"
              },
              {
                "language" : "fr-CH",
                "value" : "benzylpénicilline"
              },
              {
                "language" : "it-CH",
                "value" : "Benzilpenicillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Benzylpenicillin"
              },
              {
                "language" : "en-US",
                "value" : "Benzylpenicillin"
              }
            ]
          },
          {
            "code" : "28530008",
            "display" : "Beta-galactosidase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tilactase"
              },
              {
                "language" : "fr-CH",
                "value" : "tilactase"
              },
              {
                "language" : "it-CH",
                "value" : "Tilattasi"
              },
              {
                "language" : "rm-CH",
                "value" : "Tilactase"
              },
              {
                "language" : "en-US",
                "value" : "Beta-galactosidase"
              }
            ]
          },
          {
            "code" : "418067008",
            "display" : "Betahistine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Betahistin"
              },
              {
                "language" : "fr-CH",
                "value" : "bétahistine"
              },
              {
                "language" : "it-CH",
                "value" : "Betaistina"
              },
              {
                "language" : "rm-CH",
                "value" : "Betahistin"
              },
              {
                "language" : "en-US",
                "value" : "Betahistine"
              }
            ]
          },
          {
            "code" : "43356007",
            "display" : "Betaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Betain"
              },
              {
                "language" : "fr-CH",
                "value" : "bétaine"
              },
              {
                "language" : "it-CH",
                "value" : "Betaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Betain"
              },
              {
                "language" : "en-US",
                "value" : "Betaine"
              }
            ]
          },
          {
            "code" : "116571008",
            "display" : "Betamethasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Betamethason"
              },
              {
                "language" : "fr-CH",
                "value" : "bétaméthasone"
              },
              {
                "language" : "it-CH",
                "value" : "Betametasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Betamethason"
              },
              {
                "language" : "en-US",
                "value" : "Betamethasone"
              }
            ]
          },
          {
            "code" : "409276006",
            "display" : "Betaxolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Betaxolol"
              },
              {
                "language" : "fr-CH",
                "value" : "bétaxolol"
              },
              {
                "language" : "it-CH",
                "value" : "Betaxololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Betaxolol"
              },
              {
                "language" : "en-US",
                "value" : "Betaxolol"
              }
            ]
          },
          {
            "code" : "409406007",
            "display" : "Bevacizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bevacizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "bévacizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Bevacizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Bevacizumab"
              },
              {
                "language" : "en-US",
                "value" : "Bevacizumab"
              }
            ]
          },
          {
            "code" : "396025003",
            "display" : "Bezafibrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bezafibrat"
              },
              {
                "language" : "fr-CH",
                "value" : "bézafibrate"
              },
              {
                "language" : "it-CH",
                "value" : "Bezafibrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Bezafibrat"
              },
              {
                "language" : "en-US",
                "value" : "Bezafibrate"
              }
            ]
          },
          {
            "code" : "386908000",
            "display" : "Bicalutamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bicalutamid"
              },
              {
                "language" : "fr-CH",
                "value" : "bicalutamide"
              },
              {
                "language" : "it-CH",
                "value" : "Bicalutamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Bicalutamid"
              },
              {
                "language" : "en-US",
                "value" : "Bicalutamide"
              }
            ]
          },
          {
            "code" : "772193003",
            "display" : "Bictegravir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bictegravir"
              },
              {
                "language" : "fr-CH",
                "value" : "bictégravir"
              },
              {
                "language" : "it-CH",
                "value" : "Bictegravir"
              },
              {
                "language" : "rm-CH",
                "value" : "Bictegravir"
              },
              {
                "language" : "en-US",
                "value" : "Bictegravir"
              }
            ]
          },
          {
            "code" : "697973006",
            "display" : "Bilastine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bilastin"
              },
              {
                "language" : "fr-CH",
                "value" : "bilastine"
              },
              {
                "language" : "it-CH",
                "value" : "Bilastina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bilastin"
              },
              {
                "language" : "en-US",
                "value" : "Bilastine"
              }
            ]
          },
          {
            "code" : "129492005",
            "display" : "Bimatoprost (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bimatoprost"
              },
              {
                "language" : "fr-CH",
                "value" : "bimatoprost"
              },
              {
                "language" : "it-CH",
                "value" : "Bimatoprost"
              },
              {
                "language" : "rm-CH",
                "value" : "Bimatoprost"
              },
              {
                "language" : "en-US",
                "value" : "Bimatoprost"
              }
            ]
          },
          {
            "code" : "772195005",
            "display" : "Binimetinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Binimetinib"
              },
              {
                "language" : "fr-CH",
                "value" : "binimétinib"
              },
              {
                "language" : "it-CH",
                "value" : "Binimetinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Binimetinib"
              },
              {
                "language" : "en-US",
                "value" : "Binimetinib"
              }
            ]
          },
          {
            "code" : "8919000",
            "display" : "Biotin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Biotin"
              },
              {
                "language" : "fr-CH",
                "value" : "biotine"
              },
              {
                "language" : "it-CH",
                "value" : "Biotina"
              },
              {
                "language" : "rm-CH",
                "value" : "Biotin"
              },
              {
                "language" : "en-US",
                "value" : "Biotin"
              }
            ]
          },
          {
            "code" : "387359004",
            "display" : "Biperiden (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Biperiden"
              },
              {
                "language" : "fr-CH",
                "value" : "bipéridène"
              },
              {
                "language" : "it-CH",
                "value" : "Biperidene"
              },
              {
                "language" : "rm-CH",
                "value" : "Biperiden"
              },
              {
                "language" : "en-US",
                "value" : "Biperiden"
              }
            ]
          },
          {
            "code" : "387075009",
            "display" : "Bisacodyl (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bisacodyl"
              },
              {
                "language" : "fr-CH",
                "value" : "bisacodyl"
              },
              {
                "language" : "it-CH",
                "value" : "Bisacodile"
              },
              {
                "language" : "rm-CH",
                "value" : "Bisacodyl"
              },
              {
                "language" : "en-US",
                "value" : "Bisacodyl"
              }
            ]
          },
          {
            "code" : "386868003",
            "display" : "Bisoprolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bisoprolol"
              },
              {
                "language" : "fr-CH",
                "value" : "bisoprolol"
              },
              {
                "language" : "it-CH",
                "value" : "Bisoprololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Bisoprolol"
              },
              {
                "language" : "en-US",
                "value" : "Bisoprolol"
              }
            ]
          },
          {
            "code" : "129498009",
            "display" : "Bivalirudin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bivalirudin"
              },
              {
                "language" : "fr-CH",
                "value" : "bivalirudine"
              },
              {
                "language" : "it-CH",
                "value" : "Bivalirudina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bivalirudin"
              },
              {
                "language" : "en-US",
                "value" : "Bivalirudin"
              }
            ]
          },
          {
            "code" : "372843005",
            "display" : "Bleomycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bleomycin"
              },
              {
                "language" : "fr-CH",
                "value" : "bléomycine"
              },
              {
                "language" : "it-CH",
                "value" : "Bleomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bleomycin"
              },
              {
                "language" : "en-US",
                "value" : "Bleomycin"
              }
            ]
          },
          {
            "code" : "407097007",
            "display" : "Bortezomib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bortezomib"
              },
              {
                "language" : "fr-CH",
                "value" : "bortézomib"
              },
              {
                "language" : "it-CH",
                "value" : "Bortezomib"
              },
              {
                "language" : "rm-CH",
                "value" : "Bortezomib"
              },
              {
                "language" : "en-US",
                "value" : "Bortezomib"
              }
            ]
          },
          {
            "code" : "385559004",
            "display" : "Bosentan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bosentan"
              },
              {
                "language" : "fr-CH",
                "value" : "bosentan"
              },
              {
                "language" : "it-CH",
                "value" : "Bosentan"
              },
              {
                "language" : "rm-CH",
                "value" : "Bosentan"
              },
              {
                "language" : "en-US",
                "value" : "Bosentan"
              }
            ]
          },
          {
            "code" : "703128001",
            "display" : "Bosutinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bosutinib"
              },
              {
                "language" : "fr-CH",
                "value" : "bosutinib"
              },
              {
                "language" : "it-CH",
                "value" : "Bosutinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Bosutinib"
              },
              {
                "language" : "en-US",
                "value" : "Bosutinib"
              }
            ]
          },
          {
            "code" : "108890005",
            "display" : "Botulinum toxin type A (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Botulinumtoxin Typ A"
              },
              {
                "language" : "fr-CH",
                "value" : "toxine botulique de type A"
              },
              {
                "language" : "it-CH",
                "value" : "Tossina botulinica tipo A"
              },
              {
                "language" : "rm-CH",
                "value" : "Botulinumtoxin Typ A"
              },
              {
                "language" : "en-US",
                "value" : "Botulinum toxin type A"
              }
            ]
          },
          {
            "code" : "713395006",
            "display" : "Brentuximab vedotin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Brentuximab vedotin"
              },
              {
                "language" : "fr-CH",
                "value" : "brentuximab védotine"
              },
              {
                "language" : "it-CH",
                "value" : "Brentuximab"
              },
              {
                "language" : "rm-CH",
                "value" : "Brentuximab vedotin"
              },
              {
                "language" : "en-US",
                "value" : "Brentuximab vedotin"
              }
            ]
          },
          {
            "code" : "716069007",
            "display" : "Brexpiprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Brexpiprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "brexpiprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Brexpiprazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Brexpiprazol"
              },
              {
                "language" : "en-US",
                "value" : "Brexpiprazole"
              }
            ]
          },
          {
            "code" : "372547000",
            "display" : "Brimonidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Brimonidin"
              },
              {
                "language" : "fr-CH",
                "value" : "brimonidine"
              },
              {
                "language" : "it-CH",
                "value" : "Brimonidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Brimonidin"
              },
              {
                "language" : "en-US",
                "value" : "Brimonidine"
              }
            ]
          },
          {
            "code" : "386925003",
            "display" : "Brinzolamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Brinzolamid"
              },
              {
                "language" : "fr-CH",
                "value" : "brinzolamide"
              },
              {
                "language" : "it-CH",
                "value" : "Brinzolamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Brinzolamid"
              },
              {
                "language" : "en-US",
                "value" : "Brinzolamide"
              }
            ]
          },
          {
            "code" : "420813001",
            "display" : "Brivaracetam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Brivaracetam"
              },
              {
                "language" : "fr-CH",
                "value" : "brivaracétam"
              },
              {
                "language" : "it-CH",
                "value" : "Brivaracetam"
              },
              {
                "language" : "rm-CH",
                "value" : "Brivaracetam"
              },
              {
                "language" : "en-US",
                "value" : "Brivaracetam"
              }
            ]
          },
          {
            "code" : "698049003",
            "display" : "Brivudine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Brivudin"
              },
              {
                "language" : "fr-CH",
                "value" : "brivudine"
              },
              {
                "language" : "it-CH",
                "value" : "Brivudina"
              },
              {
                "language" : "rm-CH",
                "value" : "Brivudin"
              },
              {
                "language" : "en-US",
                "value" : "Brivudine"
              }
            ]
          },
          {
            "code" : "387571009",
            "display" : "Bromazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bromazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "bromazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Bromazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Bromazepam"
              },
              {
                "language" : "en-US",
                "value" : "Bromazepam"
              }
            ]
          },
          {
            "code" : "108520008",
            "display" : "Bromfenac (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bromfenac"
              },
              {
                "language" : "fr-CH",
                "value" : "bromfénac"
              },
              {
                "language" : "it-CH",
                "value" : "Bromfenac"
              },
              {
                "language" : "rm-CH",
                "value" : "Bromfenac"
              },
              {
                "language" : "en-US",
                "value" : "Bromfenac"
              }
            ]
          },
          {
            "code" : "387039007",
            "display" : "Bromocriptine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bromocriptin"
              },
              {
                "language" : "fr-CH",
                "value" : "bromocriptine"
              },
              {
                "language" : "it-CH",
                "value" : "Bromocriptina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bromocriptin"
              },
              {
                "language" : "en-US",
                "value" : "Bromocriptine"
              }
            ]
          },
          {
            "code" : "395726003",
            "display" : "Budesonide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Budesonid"
              },
              {
                "language" : "fr-CH",
                "value" : "budésonide"
              },
              {
                "language" : "it-CH",
                "value" : "Budesonide"
              },
              {
                "language" : "rm-CH",
                "value" : "Budesonid"
              },
              {
                "language" : "en-US",
                "value" : "Budesonide"
              }
            ]
          },
          {
            "code" : "273952005",
            "display" : "Bufexamac (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bufexamac"
              },
              {
                "language" : "fr-CH",
                "value" : "bufexamac"
              },
              {
                "language" : "it-CH",
                "value" : "Bufexamac"
              },
              {
                "language" : "rm-CH",
                "value" : "Bufexamac"
              },
              {
                "language" : "en-US",
                "value" : "Bufexamac"
              }
            ]
          },
          {
            "code" : "387150008",
            "display" : "Bupivacaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bupivacain"
              },
              {
                "language" : "fr-CH",
                "value" : "bupivacaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Bupivacaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bupivacain"
              },
              {
                "language" : "en-US",
                "value" : "Bupivacaine"
              }
            ]
          },
          {
            "code" : "387173000",
            "display" : "Buprenorphine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Buprenorphin"
              },
              {
                "language" : "fr-CH",
                "value" : "buprénorphine"
              },
              {
                "language" : "it-CH",
                "value" : "Buprenorfina"
              },
              {
                "language" : "rm-CH",
                "value" : "Buprenorphin"
              },
              {
                "language" : "en-US",
                "value" : "Buprenorphine"
              }
            ]
          },
          {
            "code" : "387564004",
            "display" : "Bupropion (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bupropion"
              },
              {
                "language" : "fr-CH",
                "value" : "bupropion"
              },
              {
                "language" : "it-CH",
                "value" : "Buproprione"
              },
              {
                "language" : "rm-CH",
                "value" : "Bupropion"
              },
              {
                "language" : "en-US",
                "value" : "Bupropion"
              }
            ]
          },
          {
            "code" : "395744006",
            "display" : "Buserelin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Buserelin"
              },
              {
                "language" : "fr-CH",
                "value" : "buséréline"
              },
              {
                "language" : "it-CH",
                "value" : "Buserelina"
              },
              {
                "language" : "rm-CH",
                "value" : "Buserelin"
              },
              {
                "language" : "en-US",
                "value" : "Buserelin"
              }
            ]
          },
          {
            "code" : "446706007",
            "display" : "Cabazitaxel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cabazitaxel"
              },
              {
                "language" : "fr-CH",
                "value" : "cabazitaxel"
              },
              {
                "language" : "it-CH",
                "value" : "Cabazitaxel"
              },
              {
                "language" : "rm-CH",
                "value" : "Cabazitaxel"
              },
              {
                "language" : "en-US",
                "value" : "Cabazitaxel"
              }
            ]
          },
          {
            "code" : "386979007",
            "display" : "Cabergoline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cabergolin"
              },
              {
                "language" : "fr-CH",
                "value" : "cabergoline"
              },
              {
                "language" : "it-CH",
                "value" : "Cabergolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cabergolin"
              },
              {
                "language" : "en-US",
                "value" : "Cabergoline"
              }
            ]
          },
          {
            "code" : "255641001",
            "display" : "Caffeine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Coffein"
              },
              {
                "language" : "fr-CH",
                "value" : "caféine"
              },
              {
                "language" : "it-CH",
                "value" : "Caffeina"
              },
              {
                "language" : "rm-CH",
                "value" : "Coffein"
              },
              {
                "language" : "en-US",
                "value" : "Caffeine"
              }
            ]
          },
          {
            "code" : "395766004",
            "display" : "Calcipotriol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcipotriol"
              },
              {
                "language" : "fr-CH",
                "value" : "calcipotriol"
              },
              {
                "language" : "it-CH",
                "value" : "Calcipotriolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcipotriol"
              },
              {
                "language" : "en-US",
                "value" : "Calcipotriol"
              }
            ]
          },
          {
            "code" : "259333003",
            "display" : "Calcitriol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcitriol"
              },
              {
                "language" : "fr-CH",
                "value" : "calcitriol"
              },
              {
                "language" : "it-CH",
                "value" : "Calcitriolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcitriol"
              },
              {
                "language" : "en-US",
                "value" : "Calcitriol"
              }
            ]
          },
          {
            "code" : "387019008",
            "display" : "Calcium acetate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcium acetat"
              },
              {
                "language" : "fr-CH",
                "value" : "calcium acétate"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio acetato"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcium acetat"
              },
              {
                "language" : "en-US",
                "value" : "Calcium acetate"
              }
            ]
          },
          {
            "code" : "256620003",
            "display" : "Calcium alginate solution (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcium alginat"
              },
              {
                "language" : "fr-CH",
                "value" : "alginate calcique"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio alginato"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcium alginat"
              },
              {
                "language" : "en-US",
                "value" : "Calcium alginate solution"
              }
            ]
          },
          {
            "code" : "111122008",
            "display" : "Calcium carbaspirin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carbasalat calcium"
              },
              {
                "language" : "fr-CH",
                "value" : "carbasalate calcique"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio carbasalato"
              },
              {
                "language" : "rm-CH",
                "value" : "Carbasalat calcium"
              },
              {
                "language" : "en-US",
                "value" : "Calcium carbaspirin"
              }
            ]
          },
          {
            "code" : "387307005",
            "display" : "Calcium carbonate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcium carbonat"
              },
              {
                "language" : "fr-CH",
                "value" : "calcium carbonate"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio carbonato"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcium carbonat"
              },
              {
                "language" : "en-US",
                "value" : "Calcium carbonate"
              }
            ]
          },
          {
            "code" : "387377009",
            "display" : "Calcium chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calciumchlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "calcium chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Calciumchlorid"
              },
              {
                "language" : "en-US",
                "value" : "Calcium chloride"
              }
            ]
          },
          {
            "code" : "32445001",
            "display" : "Calcium glubionate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcium glubionat"
              },
              {
                "language" : "fr-CH",
                "value" : "calcium glubionate"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio glubionato"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcium glubionat"
              },
              {
                "language" : "en-US",
                "value" : "Calcium glubionate"
              }
            ]
          },
          {
            "code" : "387292008",
            "display" : "Calcium gluconate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcium gluconat"
              },
              {
                "language" : "fr-CH",
                "value" : "calcium gluconate"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio gluconato"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcium gluconat"
              },
              {
                "language" : "en-US",
                "value" : "Calcium gluconate"
              }
            ]
          },
          {
            "code" : "126223008",
            "display" : "Calcium leucovorin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcium folinat"
              },
              {
                "language" : "fr-CH",
                "value" : "acide folinique calcique"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio folinato"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcium folinat"
              },
              {
                "language" : "en-US",
                "value" : "Calcium leucovorin"
              }
            ]
          },
          {
            "code" : "703676004",
            "display" : "Canagliflozin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Canagliflozin"
              },
              {
                "language" : "fr-CH",
                "value" : "canagliflozine"
              },
              {
                "language" : "it-CH",
                "value" : "Canaglifozin"
              },
              {
                "language" : "rm-CH",
                "value" : "Canagliflozin"
              },
              {
                "language" : "en-US",
                "value" : "Canagliflozin"
              }
            ]
          },
          {
            "code" : "698091001",
            "display" : "Canakinumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Canakinumab"
              },
              {
                "language" : "fr-CH",
                "value" : "canakinumab"
              },
              {
                "language" : "it-CH",
                "value" : "Canakinumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Canakinumab"
              },
              {
                "language" : "en-US",
                "value" : "Canakinumab"
              }
            ]
          },
          {
            "code" : "372512008",
            "display" : "Candesartan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Candesartan"
              },
              {
                "language" : "fr-CH",
                "value" : "candésartan"
              },
              {
                "language" : "it-CH",
                "value" : "Candesartan"
              },
              {
                "language" : "rm-CH",
                "value" : "Candesartan"
              },
              {
                "language" : "en-US",
                "value" : "Candesartan"
              }
            ]
          },
          {
            "code" : "716118009",
            "display" : "Cangrelor (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cangrelor"
              },
              {
                "language" : "fr-CH",
                "value" : "cangrélor"
              },
              {
                "language" : "it-CH",
                "value" : "Cangrelor"
              },
              {
                "language" : "rm-CH",
                "value" : "Cangrelor"
              },
              {
                "language" : "en-US",
                "value" : "Cangrelor"
              }
            ]
          },
          {
            "code" : "96223000",
            "display" : "Cannabidiol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cannabidiol (CBD)"
              },
              {
                "language" : "fr-CH",
                "value" : "cannabidiol (CBD)"
              },
              {
                "language" : "it-CH",
                "value" : "Cannabidiolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Cannabidiol (CBD)"
              },
              {
                "language" : "en-US",
                "value" : "Cannabidiol"
              }
            ]
          },
          {
            "code" : "386906001",
            "display" : "Capecitabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Capecitabin"
              },
              {
                "language" : "fr-CH",
                "value" : "capécitabine"
              },
              {
                "language" : "it-CH",
                "value" : "Capecitabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Capecitabin"
              },
              {
                "language" : "en-US",
                "value" : "Capecitabine"
              }
            ]
          },
          {
            "code" : "95995002",
            "display" : "Capsaicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Capsaicin"
              },
              {
                "language" : "fr-CH",
                "value" : "capsaïcine"
              },
              {
                "language" : "it-CH",
                "value" : "Capsaicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Capsaicin"
              },
              {
                "language" : "en-US",
                "value" : "Capsaicin"
              }
            ]
          },
          {
            "code" : "387160004",
            "display" : "Captopril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Captopril"
              },
              {
                "language" : "fr-CH",
                "value" : "captopril"
              },
              {
                "language" : "it-CH",
                "value" : "Captopril"
              },
              {
                "language" : "rm-CH",
                "value" : "Captopril"
              },
              {
                "language" : "en-US",
                "value" : "Captopril"
              }
            ]
          },
          {
            "code" : "387183001",
            "display" : "Carbachol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carbachol"
              },
              {
                "language" : "fr-CH",
                "value" : "carbachol"
              },
              {
                "language" : "it-CH",
                "value" : "Carbacolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Carbachol"
              },
              {
                "language" : "en-US",
                "value" : "Carbachol"
              }
            ]
          },
          {
            "code" : "387222003",
            "display" : "Carbamazepine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carbamazepin"
              },
              {
                "language" : "fr-CH",
                "value" : "carbamazépine"
              },
              {
                "language" : "it-CH",
                "value" : "Carbamazepina"
              },
              {
                "language" : "rm-CH",
                "value" : "Carbamazepin"
              },
              {
                "language" : "en-US",
                "value" : "Carbamazepine"
              }
            ]
          },
          {
            "code" : "425003007",
            "display" : "Carbetocin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carbetocin"
              },
              {
                "language" : "fr-CH",
                "value" : "carbétocine"
              },
              {
                "language" : "it-CH",
                "value" : "Carbetocina"
              },
              {
                "language" : "rm-CH",
                "value" : "Carbetocin"
              },
              {
                "language" : "en-US",
                "value" : "Carbetocin"
              }
            ]
          },
          {
            "code" : "73579000",
            "display" : "Carbidopa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carbidopa"
              },
              {
                "language" : "fr-CH",
                "value" : "carbidopa"
              },
              {
                "language" : "it-CH",
                "value" : "Carbidopa"
              },
              {
                "language" : "rm-CH",
                "value" : "Carbidopa"
              },
              {
                "language" : "en-US",
                "value" : "Carbidopa"
              }
            ]
          },
          {
            "code" : "395831005",
            "display" : "Carbimazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carbimazol"
              },
              {
                "language" : "fr-CH",
                "value" : "carbimazole"
              },
              {
                "language" : "it-CH",
                "value" : "Carbimazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Carbimazol"
              },
              {
                "language" : "en-US",
                "value" : "Carbimazole"
              }
            ]
          },
          {
            "code" : "395842001",
            "display" : "Carbocisteine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carbocistein"
              },
              {
                "language" : "fr-CH",
                "value" : "carbocistéine"
              },
              {
                "language" : "it-CH",
                "value" : "Carbocisteina"
              },
              {
                "language" : "rm-CH",
                "value" : "Carbocistein"
              },
              {
                "language" : "en-US",
                "value" : "Carbocisteine"
              }
            ]
          },
          {
            "code" : "386905002",
            "display" : "Carboplatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carboplatin"
              },
              {
                "language" : "fr-CH",
                "value" : "carboplatine"
              },
              {
                "language" : "it-CH",
                "value" : "Carboplatino"
              },
              {
                "language" : "rm-CH",
                "value" : "Carboplatin"
              },
              {
                "language" : "en-US",
                "value" : "Carboplatin"
              }
            ]
          },
          {
            "code" : "713463006",
            "display" : "Carfilzomib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carfilzomib"
              },
              {
                "language" : "fr-CH",
                "value" : "carfilzomib"
              },
              {
                "language" : "it-CH",
                "value" : "Carfilzomib"
              },
              {
                "language" : "rm-CH",
                "value" : "Carfilzomib"
              },
              {
                "language" : "en-US",
                "value" : "Carfilzomib"
              }
            ]
          },
          {
            "code" : "715295006",
            "display" : "Cariprazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cariprazin"
              },
              {
                "language" : "fr-CH",
                "value" : "cariprazine"
              },
              {
                "language" : "it-CH",
                "value" : "Cariprazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cariprazin"
              },
              {
                "language" : "en-US",
                "value" : "Cariprazine"
              }
            ]
          },
          {
            "code" : "387281007",
            "display" : "Carmustine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carmustin"
              },
              {
                "language" : "fr-CH",
                "value" : "carmustine"
              },
              {
                "language" : "it-CH",
                "value" : "Carmustina"
              },
              {
                "language" : "rm-CH",
                "value" : "Carmustin"
              },
              {
                "language" : "en-US",
                "value" : "Carmustine"
              }
            ]
          },
          {
            "code" : "386866004",
            "display" : "Carteolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carteolol"
              },
              {
                "language" : "fr-CH",
                "value" : "cartéolol"
              },
              {
                "language" : "it-CH",
                "value" : "Carteololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Carteolol"
              },
              {
                "language" : "en-US",
                "value" : "Carteolol"
              }
            ]
          },
          {
            "code" : "386870007",
            "display" : "Carvedilol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Carvedilol"
              },
              {
                "language" : "fr-CH",
                "value" : "carvédilol"
              },
              {
                "language" : "it-CH",
                "value" : "Carvedilolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Carvedilol"
              },
              {
                "language" : "en-US",
                "value" : "Carvedilol"
              }
            ]
          },
          {
            "code" : "413770001",
            "display" : "Caspofungin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Caspofungin"
              },
              {
                "language" : "fr-CH",
                "value" : "caspofungine"
              },
              {
                "language" : "it-CH",
                "value" : "Caspofungin"
              },
              {
                "language" : "rm-CH",
                "value" : "Caspofungin"
              },
              {
                "language" : "en-US",
                "value" : "Caspofungin"
              }
            ]
          },
          {
            "code" : "387270009",
            "display" : "Cefaclor (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cefaclor"
              },
              {
                "language" : "fr-CH",
                "value" : "céfaclor"
              },
              {
                "language" : "it-CH",
                "value" : "Cefaclor"
              },
              {
                "language" : "rm-CH",
                "value" : "Cefaclor"
              },
              {
                "language" : "en-US",
                "value" : "Cefaclor"
              }
            ]
          },
          {
            "code" : "387470007",
            "display" : "Cefazolin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cefazolin"
              },
              {
                "language" : "fr-CH",
                "value" : "céfazoline"
              },
              {
                "language" : "it-CH",
                "value" : "Cefazolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cefazolin"
              },
              {
                "language" : "en-US",
                "value" : "Cefazolin"
              }
            ]
          },
          {
            "code" : "96048006",
            "display" : "Cefepime (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cefepim"
              },
              {
                "language" : "fr-CH",
                "value" : "céfépime"
              },
              {
                "language" : "it-CH",
                "value" : "Cefepime"
              },
              {
                "language" : "rm-CH",
                "value" : "Cefepim"
              },
              {
                "language" : "en-US",
                "value" : "Cefepime"
              }
            ]
          },
          {
            "code" : "785697003",
            "display" : "Cefixime anhydrous (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cefixim"
              },
              {
                "language" : "fr-CH",
                "value" : "céfixime"
              },
              {
                "language" : "it-CH",
                "value" : "Cefixima"
              },
              {
                "language" : "rm-CH",
                "value" : "Cefixim"
              },
              {
                "language" : "en-US",
                "value" : "Cefixime anhydrous"
              }
            ]
          },
          {
            "code" : "387534007",
            "display" : "Cefpodoxime (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cefpodoxim"
              },
              {
                "language" : "fr-CH",
                "value" : "cefpodoxime"
              },
              {
                "language" : "it-CH",
                "value" : "Cefpodoxima"
              },
              {
                "language" : "rm-CH",
                "value" : "Cefpodoxim"
              },
              {
                "language" : "en-US",
                "value" : "Cefpodoxime"
              }
            ]
          },
          {
            "code" : "387200005",
            "display" : "Ceftazidime (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ceftazidim"
              },
              {
                "language" : "fr-CH",
                "value" : "ceftazidime"
              },
              {
                "language" : "it-CH",
                "value" : "Ceftazidime"
              },
              {
                "language" : "rm-CH",
                "value" : "Ceftazidim"
              },
              {
                "language" : "en-US",
                "value" : "Ceftazidime"
              }
            ]
          },
          {
            "code" : "372670001",
            "display" : "Ceftriaxone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ceftriaxon"
              },
              {
                "language" : "fr-CH",
                "value" : "ceftriaxone"
              },
              {
                "language" : "it-CH",
                "value" : "Ceftriaxone"
              },
              {
                "language" : "rm-CH",
                "value" : "Ceftriaxon"
              },
              {
                "language" : "en-US",
                "value" : "Ceftriaxone"
              }
            ]
          },
          {
            "code" : "372833007",
            "display" : "Cefuroxime (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cefuroxim"
              },
              {
                "language" : "fr-CH",
                "value" : "céfuroxime"
              },
              {
                "language" : "it-CH",
                "value" : "Cefuroxime"
              },
              {
                "language" : "rm-CH",
                "value" : "Cefuroxim"
              },
              {
                "language" : "en-US",
                "value" : "Cefuroxime"
              }
            ]
          },
          {
            "code" : "116081000",
            "display" : "Celecoxib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Celecoxib"
              },
              {
                "language" : "fr-CH",
                "value" : "célécoxib"
              },
              {
                "language" : "it-CH",
                "value" : "Celecoxib"
              },
              {
                "language" : "rm-CH",
                "value" : "Celecoxib"
              },
              {
                "language" : "en-US",
                "value" : "Celecoxib"
              }
            ]
          },
          {
            "code" : "372523007",
            "display" : "Cetirizine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cetirizin"
              },
              {
                "language" : "fr-CH",
                "value" : "cétirizine"
              },
              {
                "language" : "it-CH",
                "value" : "Cetirizina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cetirizin"
              },
              {
                "language" : "en-US",
                "value" : "Cetirizine"
              }
            ]
          },
          {
            "code" : "387043006",
            "display" : "Cetylpyridinium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cetylpyridinium"
              },
              {
                "language" : "fr-CH",
                "value" : "cétylpyridinium"
              },
              {
                "language" : "it-CH",
                "value" : "Cetilpiridinio"
              },
              {
                "language" : "rm-CH",
                "value" : "Cetylpyridinium"
              },
              {
                "language" : "en-US",
                "value" : "Cetylpyridinium"
              }
            ]
          },
          {
            "code" : "372777009",
            "display" : "Chloramphenicol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chloramphenicol"
              },
              {
                "language" : "fr-CH",
                "value" : "chloramphénicol"
              },
              {
                "language" : "it-CH",
                "value" : "Cloramfenicolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Chloramphenicol"
              },
              {
                "language" : "en-US",
                "value" : "Chloramphenicol"
              }
            ]
          },
          {
            "code" : "372866006",
            "display" : "Chlordiazepoxide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlordiazepoxid"
              },
              {
                "language" : "fr-CH",
                "value" : "chlordiazépoxide"
              },
              {
                "language" : "it-CH",
                "value" : "Clordiazepossido"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlordiazepoxid"
              },
              {
                "language" : "en-US",
                "value" : "Chlordiazepoxide"
              }
            ]
          },
          {
            "code" : "373568007",
            "display" : "Chlorhexidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlorhexidin"
              },
              {
                "language" : "fr-CH",
                "value" : "chlorhexidine"
              },
              {
                "language" : "it-CH",
                "value" : "Clorexidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlorhexidin"
              },
              {
                "language" : "en-US",
                "value" : "Chlorhexidine"
              }
            ]
          },
          {
            "code" : "734645001",
            "display" : "Chlormadinone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlormadinon"
              },
              {
                "language" : "fr-CH",
                "value" : "chlormadinone"
              },
              {
                "language" : "it-CH",
                "value" : "Clormadinone"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlormadinon"
              },
              {
                "language" : "en-US",
                "value" : "Chlormadinone"
              }
            ]
          },
          {
            "code" : "373468005",
            "display" : "Chloroquine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chloroquin"
              },
              {
                "language" : "fr-CH",
                "value" : "chloroquine"
              },
              {
                "language" : "it-CH",
                "value" : "Clorochina"
              },
              {
                "language" : "rm-CH",
                "value" : "Chloroquin"
              },
              {
                "language" : "en-US",
                "value" : "Chloroquine"
              }
            ]
          },
          {
            "code" : "372914003",
            "display" : "Chlorphenamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlorphenamin"
              },
              {
                "language" : "fr-CH",
                "value" : "chlorphénamine"
              },
              {
                "language" : "it-CH",
                "value" : "Clorfenamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlorphenamin"
              },
              {
                "language" : "en-US",
                "value" : "Chlorphenamine"
              }
            ]
          },
          {
            "code" : "387258005",
            "display" : "Chlorpromazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlorpromazin"
              },
              {
                "language" : "fr-CH",
                "value" : "chlorpromazine"
              },
              {
                "language" : "it-CH",
                "value" : "Clorpromazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlorpromazin"
              },
              {
                "language" : "en-US",
                "value" : "Chlorpromazine"
              }
            ]
          },
          {
            "code" : "387317000",
            "display" : "Chlorprothixene (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlorprothixen"
              },
              {
                "language" : "fr-CH",
                "value" : "chlorprothixène"
              },
              {
                "language" : "it-CH",
                "value" : "Clorprotixene"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlorprothixen"
              },
              {
                "language" : "en-US",
                "value" : "Chlorprothixene"
              }
            ]
          },
          {
            "code" : "387324004",
            "display" : "Chlortalidone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlortalidon"
              },
              {
                "language" : "fr-CH",
                "value" : "chlortalidone"
              },
              {
                "language" : "it-CH",
                "value" : "Clortalidone"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlortalidon"
              },
              {
                "language" : "en-US",
                "value" : "Chlortalidone"
              }
            ]
          },
          {
            "code" : "4104007",
            "display" : "Chondroitin sulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chondroitinsulfate-Gemisch"
              },
              {
                "language" : "fr-CH",
                "value" : "chondroïtine sulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Condroitinsolfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Chondroitinsulfate-Gemisch"
              },
              {
                "language" : "en-US",
                "value" : "Chondroitin sulfate"
              }
            ]
          },
          {
            "code" : "129494006",
            "display" : "Choriogonadotropin alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Choriogonadotropin alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "choriogonadotropine alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Coriogonadotropina alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Choriogonadotropin alfa"
              },
              {
                "language" : "en-US",
                "value" : "Choriogonadotropin alfa"
              }
            ]
          },
          {
            "code" : "417420004",
            "display" : "Ciclesonide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ciclesonid"
              },
              {
                "language" : "fr-CH",
                "value" : "ciclésonide"
              },
              {
                "language" : "it-CH",
                "value" : "Ciclesonide"
              },
              {
                "language" : "rm-CH",
                "value" : "Ciclesonid"
              },
              {
                "language" : "en-US",
                "value" : "Ciclesonide"
              }
            ]
          },
          {
            "code" : "372854000",
            "display" : "Ciclopirox (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ciclopirox"
              },
              {
                "language" : "fr-CH",
                "value" : "ciclopirox"
              },
              {
                "language" : "it-CH",
                "value" : "Ciclopirox"
              },
              {
                "language" : "rm-CH",
                "value" : "Ciclopirox"
              },
              {
                "language" : "en-US",
                "value" : "Ciclopirox"
              }
            ]
          },
          {
            "code" : "387467008",
            "display" : "Ciclosporin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ciclosporin"
              },
              {
                "language" : "fr-CH",
                "value" : "ciclosporine"
              },
              {
                "language" : "it-CH",
                "value" : "Ciclosporina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ciclosporin"
              },
              {
                "language" : "en-US",
                "value" : "Ciclosporin"
              }
            ]
          },
          {
            "code" : "96058005",
            "display" : "Cilastatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cilastatin"
              },
              {
                "language" : "fr-CH",
                "value" : "cilastatine"
              },
              {
                "language" : "it-CH",
                "value" : "Cilastatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cilastatin"
              },
              {
                "language" : "en-US",
                "value" : "Cilastatin"
              }
            ]
          },
          {
            "code" : "395947008",
            "display" : "Cilazapril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cilazapril"
              },
              {
                "language" : "fr-CH",
                "value" : "cilazapril"
              },
              {
                "language" : "it-CH",
                "value" : "Cilazapril"
              },
              {
                "language" : "rm-CH",
                "value" : "Cilazapril"
              },
              {
                "language" : "en-US",
                "value" : "Cilazapril"
              }
            ]
          },
          {
            "code" : "373541007",
            "display" : "Cimetidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cimetidin"
              },
              {
                "language" : "fr-CH",
                "value" : "cimétidine"
              },
              {
                "language" : "it-CH",
                "value" : "Cimetidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cimetidin"
              },
              {
                "language" : "en-US",
                "value" : "Cimetidine"
              }
            ]
          },
          {
            "code" : "409392004",
            "display" : "Cinacalcet (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cinacalcet"
              },
              {
                "language" : "fr-CH",
                "value" : "cinacalcet"
              },
              {
                "language" : "it-CH",
                "value" : "Cinacalcet"
              },
              {
                "language" : "rm-CH",
                "value" : "Cinacalcet"
              },
              {
                "language" : "en-US",
                "value" : "Cinacalcet"
              }
            ]
          },
          {
            "code" : "395953008",
            "display" : "Cinchocaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cinchocain"
              },
              {
                "language" : "fr-CH",
                "value" : "cinchocaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Cincocaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cinchocain"
              },
              {
                "language" : "en-US",
                "value" : "Cinchocaine"
              }
            ]
          },
          {
            "code" : "395955001",
            "display" : "Cinnarizine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cinnarizin"
              },
              {
                "language" : "fr-CH",
                "value" : "cinnarizine"
              },
              {
                "language" : "it-CH",
                "value" : "Cinnarizina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cinnarizin"
              },
              {
                "language" : "en-US",
                "value" : "Cinnarizine"
              }
            ]
          },
          {
            "code" : "372840008",
            "display" : "Ciprofloxacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ciprofloxacin"
              },
              {
                "language" : "fr-CH",
                "value" : "ciprofloxacine"
              },
              {
                "language" : "it-CH",
                "value" : "Ciprofloxacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ciprofloxacin"
              },
              {
                "language" : "en-US",
                "value" : "Ciprofloxacin"
              }
            ]
          },
          {
            "code" : "372495006",
            "display" : "Cisatracurium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cisatracurium"
              },
              {
                "language" : "fr-CH",
                "value" : "cisatracurium"
              },
              {
                "language" : "it-CH",
                "value" : "Cisatracurio"
              },
              {
                "language" : "rm-CH",
                "value" : "Cisatracurium"
              },
              {
                "language" : "en-US",
                "value" : "Cisatracurium"
              }
            ]
          },
          {
            "code" : "387318005",
            "display" : "Cisplatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cisplatin"
              },
              {
                "language" : "fr-CH",
                "value" : "cisplatine"
              },
              {
                "language" : "it-CH",
                "value" : "Cisplatino"
              },
              {
                "language" : "rm-CH",
                "value" : "Cisplatin"
              },
              {
                "language" : "en-US",
                "value" : "Cisplatin"
              }
            ]
          },
          {
            "code" : "372596005",
            "display" : "Citalopram (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Citalopram"
              },
              {
                "language" : "fr-CH",
                "value" : "citalopram"
              },
              {
                "language" : "it-CH",
                "value" : "Citalopram"
              },
              {
                "language" : "rm-CH",
                "value" : "Citalopram"
              },
              {
                "language" : "en-US",
                "value" : "Citalopram"
              }
            ]
          },
          {
            "code" : "725962006",
            "display" : "Citric acid monohydrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Citronensäure-Monohydrat"
              },
              {
                "language" : "fr-CH",
                "value" : "acide citrique monohydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Acido citrico monoidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Citronensäure-Monohydrat"
              },
              {
                "language" : "en-US",
                "value" : "Citric acid monohydrate"
              }
            ]
          },
          {
            "code" : "386916009",
            "display" : "Cladribine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cladribin"
              },
              {
                "language" : "fr-CH",
                "value" : "cladribine"
              },
              {
                "language" : "it-CH",
                "value" : "Cladribina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cladribin"
              },
              {
                "language" : "en-US",
                "value" : "Cladribine"
              }
            ]
          },
          {
            "code" : "387487009",
            "display" : "Clarithromycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clarithromycin"
              },
              {
                "language" : "fr-CH",
                "value" : "clarithromycine"
              },
              {
                "language" : "it-CH",
                "value" : "Claritromicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clarithromycin"
              },
              {
                "language" : "en-US",
                "value" : "Clarithromycin"
              }
            ]
          },
          {
            "code" : "395939008",
            "display" : "Clavulanic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clavulansäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide clavulanique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido clavulanico"
              },
              {
                "language" : "rm-CH",
                "value" : "Clavulansäure"
              },
              {
                "language" : "en-US",
                "value" : "Clavulanic acid"
              }
            ]
          },
          {
            "code" : "372744005",
            "display" : "Clemastine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clemastin"
              },
              {
                "language" : "fr-CH",
                "value" : "clémastine"
              },
              {
                "language" : "it-CH",
                "value" : "Clemastina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clemastin"
              },
              {
                "language" : "en-US",
                "value" : "Clemastine"
              }
            ]
          },
          {
            "code" : "439471002",
            "display" : "Clevidipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clevidipin"
              },
              {
                "language" : "fr-CH",
                "value" : "clévidipine"
              },
              {
                "language" : "it-CH",
                "value" : "Clevidipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clevidipin"
              },
              {
                "language" : "en-US",
                "value" : "Clevidipine"
              }
            ]
          },
          {
            "code" : "372786004",
            "display" : "Clindamycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clindamycin"
              },
              {
                "language" : "fr-CH",
                "value" : "clindamycine"
              },
              {
                "language" : "it-CH",
                "value" : "Clindamicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clindamycin"
              },
              {
                "language" : "en-US",
                "value" : "Clindamycin"
              }
            ]
          },
          {
            "code" : "387291001",
            "display" : "Clioquinol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clioquinol"
              },
              {
                "language" : "fr-CH",
                "value" : "clioquinol"
              },
              {
                "language" : "it-CH",
                "value" : "Cliochinolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Clioquinol"
              },
              {
                "language" : "en-US",
                "value" : "Clioquinol"
              }
            ]
          },
          {
            "code" : "387572002",
            "display" : "Clobazam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clobazam"
              },
              {
                "language" : "fr-CH",
                "value" : "clobazam"
              },
              {
                "language" : "it-CH",
                "value" : "Clobazam"
              },
              {
                "language" : "rm-CH",
                "value" : "Clobazam"
              },
              {
                "language" : "en-US",
                "value" : "Clobazam"
              }
            ]
          },
          {
            "code" : "419129004",
            "display" : "Clobetasol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clobetasol"
              },
              {
                "language" : "fr-CH",
                "value" : "clobétasol"
              },
              {
                "language" : "it-CH",
                "value" : "Clobetasolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Clobetasol"
              },
              {
                "language" : "en-US",
                "value" : "Clobetasol"
              }
            ]
          },
          {
            "code" : "395963000",
            "display" : "Clobetasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clobetason"
              },
              {
                "language" : "fr-CH",
                "value" : "clobétasone"
              },
              {
                "language" : "it-CH",
                "value" : "Clobetasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Clobetason"
              },
              {
                "language" : "en-US",
                "value" : "Clobetasone"
              }
            ]
          },
          {
            "code" : "413873006",
            "display" : "Clofarabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clofarabin"
              },
              {
                "language" : "fr-CH",
                "value" : "clofarabine"
              },
              {
                "language" : "it-CH",
                "value" : "Clofarabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clofarabin"
              },
              {
                "language" : "en-US",
                "value" : "Clofarabine"
              }
            ]
          },
          {
            "code" : "387410004",
            "display" : "Clofazimine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clofazimin"
              },
              {
                "language" : "fr-CH",
                "value" : "clofazimine"
              },
              {
                "language" : "it-CH",
                "value" : "Clofazimina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clofazimin"
              },
              {
                "language" : "en-US",
                "value" : "Clofazimine"
              }
            ]
          },
          {
            "code" : "395978007",
            "display" : "Clomethiazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clomethiazol"
              },
              {
                "language" : "fr-CH",
                "value" : "clométhiazole"
              },
              {
                "language" : "it-CH",
                "value" : "Clometiazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Clomethiazol"
              },
              {
                "language" : "en-US",
                "value" : "Clomethiazole"
              }
            ]
          },
          {
            "code" : "372903001",
            "display" : "Clomipramine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clomipramin"
              },
              {
                "language" : "fr-CH",
                "value" : "clomipramine"
              },
              {
                "language" : "it-CH",
                "value" : "Clomipramina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clomipramin"
              },
              {
                "language" : "en-US",
                "value" : "Clomipramine"
              }
            ]
          },
          {
            "code" : "387383007",
            "display" : "Clonazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clonazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "clonazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Clonazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Clonazepam"
              },
              {
                "language" : "en-US",
                "value" : "Clonazepam"
              }
            ]
          },
          {
            "code" : "372805007",
            "display" : "Clonidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clonidin"
              },
              {
                "language" : "fr-CH",
                "value" : "clonidine"
              },
              {
                "language" : "it-CH",
                "value" : "Clonidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clonidin"
              },
              {
                "language" : "en-US",
                "value" : "Clonidine"
              }
            ]
          },
          {
            "code" : "386952008",
            "display" : "Clopidogrel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clopidogrel"
              },
              {
                "language" : "fr-CH",
                "value" : "clopidogrel"
              },
              {
                "language" : "it-CH",
                "value" : "Clopidogrel"
              },
              {
                "language" : "rm-CH",
                "value" : "Clopidogrel"
              },
              {
                "language" : "en-US",
                "value" : "Clopidogrel"
              }
            ]
          },
          {
            "code" : "698028004",
            "display" : "Clotiapine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clotiapin"
              },
              {
                "language" : "fr-CH",
                "value" : "clotiapine"
              },
              {
                "language" : "it-CH",
                "value" : "Clotiapina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clotiapin"
              },
              {
                "language" : "en-US",
                "value" : "Clotiapine"
              }
            ]
          },
          {
            "code" : "387325003",
            "display" : "Clotrimazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clotrimazol"
              },
              {
                "language" : "fr-CH",
                "value" : "clotrimazole"
              },
              {
                "language" : "it-CH",
                "value" : "Clotrimazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Clotrimazol"
              },
              {
                "language" : "en-US",
                "value" : "Clotrimazole"
              }
            ]
          },
          {
            "code" : "387568001",
            "display" : "Clozapine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clozapin"
              },
              {
                "language" : "fr-CH",
                "value" : "clozapine"
              },
              {
                "language" : "it-CH",
                "value" : "Clozapina"
              },
              {
                "language" : "rm-CH",
                "value" : "Clozapin"
              },
              {
                "language" : "en-US",
                "value" : "Clozapine"
              }
            ]
          },
          {
            "code" : "7348004",
            "display" : "Coagulation factor II (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Blutgerinnungsfaktor II human (Prothrombin)"
              },
              {
                "language" : "fr-CH",
                "value" : "facteur II de coagulation humain (prothrombine)"
              },
              {
                "language" : "it-CH",
                "value" : "Fattore II di coagulazione umano (protrombina)"
              },
              {
                "language" : "rm-CH",
                "value" : "Blutgerinnungsfaktor II human (Prothrombin)"
              },
              {
                "language" : "en-US",
                "value" : "Coagulation factor II"
              }
            ]
          },
          {
            "code" : "54378000",
            "display" : "Coagulation factor IX (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Blutgerinnungsfaktor IX human"
              },
              {
                "language" : "fr-CH",
                "value" : "facteur IX de coagulation humain"
              },
              {
                "language" : "it-CH",
                "value" : "Fattore IX di coagulazione umano"
              },
              {
                "language" : "rm-CH",
                "value" : "Blutgerinnungsfaktor IX human"
              },
              {
                "language" : "en-US",
                "value" : "Coagulation factor IX"
              }
            ]
          },
          {
            "code" : "30804005",
            "display" : "Coagulation factor VII (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Blutgerinnungsfaktor VII human"
              },
              {
                "language" : "fr-CH",
                "value" : "facteur VII de coagulation humain"
              },
              {
                "language" : "it-CH",
                "value" : "Fattore VII di coagulazione umano"
              },
              {
                "language" : "rm-CH",
                "value" : "Blutgerinnungsfaktor VII human"
              },
              {
                "language" : "en-US",
                "value" : "Coagulation factor VII"
              }
            ]
          },
          {
            "code" : "81444003",
            "display" : "Coagulation factor X (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Blutgerinnungsfaktor X human"
              },
              {
                "language" : "fr-CH",
                "value" : "facteur X de coagulation humain"
              },
              {
                "language" : "it-CH",
                "value" : "Fattore X di coagulazione umano"
              },
              {
                "language" : "rm-CH",
                "value" : "Blutgerinnungsfaktor X human"
              },
              {
                "language" : "en-US",
                "value" : "Coagulation factor X"
              }
            ]
          },
          {
            "code" : "51161000",
            "display" : "Coagulation factor XIII (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Blutgerinnungsfaktor XIII human"
              },
              {
                "language" : "fr-CH",
                "value" : "facteur XIII de coagulation humain"
              },
              {
                "language" : "it-CH",
                "value" : "Fattore XIII di coagulazione umano"
              },
              {
                "language" : "rm-CH",
                "value" : "Blutgerinnungsfaktor XIII human"
              },
              {
                "language" : "en-US",
                "value" : "Coagulation factor XIII"
              }
            ]
          },
          {
            "code" : "710109003",
            "display" : "Cobicistat (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cobicistat"
              },
              {
                "language" : "fr-CH",
                "value" : "cobicistat"
              },
              {
                "language" : "it-CH",
                "value" : "Cobicistat"
              },
              {
                "language" : "rm-CH",
                "value" : "Cobicistat"
              },
              {
                "language" : "en-US",
                "value" : "Cobicistat"
              }
            ]
          },
          {
            "code" : "387085005",
            "display" : "Cocaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cocain"
              },
              {
                "language" : "fr-CH",
                "value" : "cocaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Cocaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cocain"
              },
              {
                "language" : "en-US",
                "value" : "Cocaine"
              }
            ]
          },
          {
            "code" : "387494007",
            "display" : "Codeine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Codein"
              },
              {
                "language" : "fr-CH",
                "value" : "codéine"
              },
              {
                "language" : "it-CH",
                "value" : "Codeina"
              },
              {
                "language" : "rm-CH",
                "value" : "Codein"
              },
              {
                "language" : "en-US",
                "value" : "Codeine"
              }
            ]
          },
          {
            "code" : "725666006",
            "display" : "Codeine phosphate hemihydrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Codein phosphat hemihydrat"
              },
              {
                "language" : "fr-CH",
                "value" : "codéine phosphate hémihydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Codeina fosfato emiidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Codein phosphat hemihydrat"
              },
              {
                "language" : "en-US",
                "value" : "Codeine phosphate hemihydrate"
              }
            ]
          },
          {
            "code" : "387413002",
            "display" : "Colchicine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Colchicin"
              },
              {
                "language" : "fr-CH",
                "value" : "colchicine"
              },
              {
                "language" : "it-CH",
                "value" : "Colchicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Colchicin"
              },
              {
                "language" : "en-US",
                "value" : "Colchicine"
              }
            ]
          },
          {
            "code" : "18414002",
            "display" : "Colecalciferol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Colecalciferol (Vitamin D3)"
              },
              {
                "language" : "fr-CH",
                "value" : "colécalciférol (Vitamine D3)"
              },
              {
                "language" : "it-CH",
                "value" : "Colecalciferolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Colecalciferol (Vitamin D3)"
              },
              {
                "language" : "en-US",
                "value" : "Colecalciferol"
              }
            ]
          },
          {
            "code" : "387408001",
            "display" : "Colestyramine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Colestyramin"
              },
              {
                "language" : "fr-CH",
                "value" : "colestyramine"
              },
              {
                "language" : "it-CH",
                "value" : "Colestiramina"
              },
              {
                "language" : "rm-CH",
                "value" : "Colestyramin"
              },
              {
                "language" : "en-US",
                "value" : "Colestyramine"
              }
            ]
          },
          {
            "code" : "387412007",
            "display" : "Colistin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Colistin"
              },
              {
                "language" : "fr-CH",
                "value" : "colistine"
              },
              {
                "language" : "it-CH",
                "value" : "Colistina"
              },
              {
                "language" : "rm-CH",
                "value" : "Colistin"
              },
              {
                "language" : "en-US",
                "value" : "Colistin"
              }
            ]
          },
          {
            "code" : "70168001",
            "display" : "Copper sulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kupfer(II)-sulfat, wasserfreies"
              },
              {
                "language" : "fr-CH",
                "value" : "cuivre sulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Rame solfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Kupfer(II)-sulfat, wasserfreies"
              },
              {
                "language" : "en-US",
                "value" : "Copper sulfate"
              }
            ]
          },
          {
            "code" : "387221005",
            "display" : "Cromoglicate sodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cromoglicinsäure, Dinatriumsalz"
              },
              {
                "language" : "fr-CH",
                "value" : "cromoglicate sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio cromoglicato"
              },
              {
                "language" : "rm-CH",
                "value" : "Cromoglicinsäure, Dinatriumsalz"
              },
              {
                "language" : "en-US",
                "value" : "Cromoglicate sodium"
              }
            ]
          },
          {
            "code" : "372672009",
            "display" : "Cromoglicic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cromoglicinsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide cromoglicique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido cromoglicico"
              },
              {
                "language" : "rm-CH",
                "value" : "Cromoglicinsäure"
              },
              {
                "language" : "en-US",
                "value" : "Cromoglicic acid"
              }
            ]
          },
          {
            "code" : "419382002",
            "display" : "Cyanocobalamin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cyanocobalamin (Vitamin B12)"
              },
              {
                "language" : "fr-CH",
                "value" : "cyanocobalamine (Vitamine B12)"
              },
              {
                "language" : "it-CH",
                "value" : "Cianocobalamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cyanocobalamin (Vitamin B12)"
              },
              {
                "language" : "en-US",
                "value" : "Cyanocobalamin"
              }
            ]
          },
          {
            "code" : "387420009",
            "display" : "Cyclophosphamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cyclophosphamid"
              },
              {
                "language" : "fr-CH",
                "value" : "cyclophosphamide"
              },
              {
                "language" : "it-CH",
                "value" : "Ciclofosfamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Cyclophosphamid"
              },
              {
                "language" : "en-US",
                "value" : "Cyclophosphamide"
              }
            ]
          },
          {
            "code" : "387282000",
            "display" : "Cycloserine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cycloserin"
              },
              {
                "language" : "fr-CH",
                "value" : "cycloserine"
              },
              {
                "language" : "it-CH",
                "value" : "Cicloserina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cycloserin"
              },
              {
                "language" : "en-US",
                "value" : "Cycloserine"
              }
            ]
          },
          {
            "code" : "126119006",
            "display" : "Cyproterone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cyproteron"
              },
              {
                "language" : "fr-CH",
                "value" : "cyprotérone"
              },
              {
                "language" : "it-CH",
                "value" : "Ciproterone"
              },
              {
                "language" : "rm-CH",
                "value" : "Cyproteron"
              },
              {
                "language" : "en-US",
                "value" : "Cyproterone"
              }
            ]
          },
          {
            "code" : "387511003",
            "display" : "Cytarabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cytarabin"
              },
              {
                "language" : "fr-CH",
                "value" : "cytarabine"
              },
              {
                "language" : "it-CH",
                "value" : "Citarabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Cytarabin"
              },
              {
                "language" : "en-US",
                "value" : "Cytarabine"
              }
            ]
          },
          {
            "code" : "120941004",
            "display" : "Cytomegalovirus antibody (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cytomegalie-Immunglobulin human"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline humaine anti cytomégalovirus"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina umana anti-citomegalovirus"
              },
              {
                "language" : "rm-CH",
                "value" : "Cytomegalie-Immunglobulin human"
              },
              {
                "language" : "en-US",
                "value" : "Cytomegalovirus antibody"
              }
            ]
          },
          {
            "code" : "700029008",
            "display" : "Dabigatran etexilate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dabigatran etexilat"
              },
              {
                "language" : "fr-CH",
                "value" : "dabigatran étexilate"
              },
              {
                "language" : "it-CH",
                "value" : "Dabigratan etexilato"
              },
              {
                "language" : "rm-CH",
                "value" : "Dabigatran etexilat"
              },
              {
                "language" : "en-US",
                "value" : "Dabigatran etexilate"
              }
            ]
          },
          {
            "code" : "703641001",
            "display" : "Dabrafenib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dabrafenib"
              },
              {
                "language" : "fr-CH",
                "value" : "dabrafénib"
              },
              {
                "language" : "it-CH",
                "value" : "Dabrafenib"
              },
              {
                "language" : "rm-CH",
                "value" : "Dabrafenib"
              },
              {
                "language" : "en-US",
                "value" : "Dabrafenib"
              }
            ]
          },
          {
            "code" : "387441003",
            "display" : "Dacarbazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dacarbazin"
              },
              {
                "language" : "fr-CH",
                "value" : "dacarbazine"
              },
              {
                "language" : "it-CH",
                "value" : "Dacarbazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dacarbazin"
              },
              {
                "language" : "en-US",
                "value" : "Dacarbazine"
              }
            ]
          },
          {
            "code" : "712519008",
            "display" : "Daclatasvir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Daclatasvir"
              },
              {
                "language" : "fr-CH",
                "value" : "daclatasvir"
              },
              {
                "language" : "it-CH",
                "value" : "Daclatasvir"
              },
              {
                "language" : "rm-CH",
                "value" : "Daclatasvir"
              },
              {
                "language" : "en-US",
                "value" : "Daclatasvir"
              }
            ]
          },
          {
            "code" : "387353003",
            "display" : "Dactinomycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dactinomycin"
              },
              {
                "language" : "fr-CH",
                "value" : "dactinomycine"
              },
              {
                "language" : "it-CH",
                "value" : "Dactinomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dactinomycin"
              },
              {
                "language" : "en-US",
                "value" : "Dactinomycin"
              }
            ]
          },
          {
            "code" : "116776001",
            "display" : "D-alpha-tocopherol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tocopherol D-alpha (Vitamin E)"
              },
              {
                "language" : "fr-CH",
                "value" : "tocophérol D-alfa (Vitamine E)"
              },
              {
                "language" : "it-CH",
                "value" : "D-alfa-tocoferolo (vitamina E)"
              },
              {
                "language" : "rm-CH",
                "value" : "Tocopherol D-alpha (Vitamin E)"
              },
              {
                "language" : "en-US",
                "value" : "D-alpha-tocopherol"
              }
            ]
          },
          {
            "code" : "108987000",
            "display" : "Dalteparin sodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dalteparin natrium"
              },
              {
                "language" : "fr-CH",
                "value" : "daltéparine sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Dalteparina sodica"
              },
              {
                "language" : "rm-CH",
                "value" : "Dalteparin natrium"
              },
              {
                "language" : "en-US",
                "value" : "Dalteparin sodium"
              }
            ]
          },
          {
            "code" : "372564002",
            "display" : "Danaparoid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Danaparoid"
              },
              {
                "language" : "fr-CH",
                "value" : "danaparoïde"
              },
              {
                "language" : "it-CH",
                "value" : "Danaparoid"
              },
              {
                "language" : "rm-CH",
                "value" : "Danaparoid"
              },
              {
                "language" : "en-US",
                "value" : "Danaparoid"
              }
            ]
          },
          {
            "code" : "372819007",
            "display" : "Dantrolene (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dantrolen"
              },
              {
                "language" : "fr-CH",
                "value" : "dantrolène"
              },
              {
                "language" : "it-CH",
                "value" : "Dantrolene"
              },
              {
                "language" : "rm-CH",
                "value" : "Dantrolen"
              },
              {
                "language" : "en-US",
                "value" : "Dantrolene"
              }
            ]
          },
          {
            "code" : "703674001",
            "display" : "Dapagliflozin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dapagliflozin"
              },
              {
                "language" : "fr-CH",
                "value" : "dapagliflozine"
              },
              {
                "language" : "it-CH",
                "value" : "Dapaglifozin"
              },
              {
                "language" : "rm-CH",
                "value" : "Dapagliflozin"
              },
              {
                "language" : "en-US",
                "value" : "Dapagliflozin"
              }
            ]
          },
          {
            "code" : "702794006",
            "display" : "Dapoxetine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dapoxetin"
              },
              {
                "language" : "fr-CH",
                "value" : "dapoxétine"
              },
              {
                "language" : "it-CH",
                "value" : "Dapoxetina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dapoxetin"
              },
              {
                "language" : "en-US",
                "value" : "Dapoxetine"
              }
            ]
          },
          {
            "code" : "406439009",
            "display" : "Daptomycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Daptomycin"
              },
              {
                "language" : "fr-CH",
                "value" : "daptomycine"
              },
              {
                "language" : "it-CH",
                "value" : "Daptomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Daptomycin"
              },
              {
                "language" : "en-US",
                "value" : "Daptomycin"
              }
            ]
          },
          {
            "code" : "716016006",
            "display" : "Daratumumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Daratumumab"
              },
              {
                "language" : "fr-CH",
                "value" : "daratumumab"
              },
              {
                "language" : "it-CH",
                "value" : "Daratumumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Daratumumab"
              },
              {
                "language" : "en-US",
                "value" : "Daratumumab"
              }
            ]
          },
          {
            "code" : "385608005",
            "display" : "Darbepoetin alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Darbepoetin alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "darbépoétine alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Darbeaoetina alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Darbepoetin alfa"
              },
              {
                "language" : "en-US",
                "value" : "Darbepoetin alfa"
              }
            ]
          },
          {
            "code" : "416140008",
            "display" : "Darifenacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Darifenacin"
              },
              {
                "language" : "fr-CH",
                "value" : "darifénacine"
              },
              {
                "language" : "it-CH",
                "value" : "Darifenacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Darifenacin"
              },
              {
                "language" : "en-US",
                "value" : "Darifenacin"
              }
            ]
          },
          {
            "code" : "423888002",
            "display" : "Darunavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Darunavir"
              },
              {
                "language" : "fr-CH",
                "value" : "darunavir"
              },
              {
                "language" : "it-CH",
                "value" : "Darunavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Darunavir"
              },
              {
                "language" : "en-US",
                "value" : "Darunavir"
              }
            ]
          },
          {
            "code" : "423658008",
            "display" : "Dasatinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dasatinib"
              },
              {
                "language" : "fr-CH",
                "value" : "dasatinib"
              },
              {
                "language" : "it-CH",
                "value" : "Dasatinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Dasatinib"
              },
              {
                "language" : "en-US",
                "value" : "Dasatinib"
              }
            ]
          },
          {
            "code" : "372715008",
            "display" : "Daunorubicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Daunorubicin"
              },
              {
                "language" : "fr-CH",
                "value" : "daunorubicine"
              },
              {
                "language" : "it-CH",
                "value" : "Daunorubicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Daunorubicin"
              },
              {
                "language" : "en-US",
                "value" : "Daunorubicin"
              }
            ]
          },
          {
            "code" : "420759005",
            "display" : "Decitabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Decitabin"
              },
              {
                "language" : "fr-CH",
                "value" : "décitabine"
              },
              {
                "language" : "it-CH",
                "value" : "Decitabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Decitabin"
              },
              {
                "language" : "en-US",
                "value" : "Decitabine"
              }
            ]
          },
          {
            "code" : "419985007",
            "display" : "Deferasirox (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deferasirox"
              },
              {
                "language" : "fr-CH",
                "value" : "déférasirox"
              },
              {
                "language" : "it-CH",
                "value" : "Deferasirox"
              },
              {
                "language" : "rm-CH",
                "value" : "Deferasirox"
              },
              {
                "language" : "en-US",
                "value" : "Deferasirox"
              }
            ]
          },
          {
            "code" : "396011004",
            "display" : "Deferiprone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deferipron"
              },
              {
                "language" : "fr-CH",
                "value" : "défériprone"
              },
              {
                "language" : "it-CH",
                "value" : "Deferiprone"
              },
              {
                "language" : "rm-CH",
                "value" : "Deferipron"
              },
              {
                "language" : "en-US",
                "value" : "Deferiprone"
              }
            ]
          },
          {
            "code" : "372825006",
            "display" : "Deferoxamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deferoxamin"
              },
              {
                "language" : "fr-CH",
                "value" : "déféroxamine"
              },
              {
                "language" : "it-CH",
                "value" : "Deferoxamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Deferoxamin"
              },
              {
                "language" : "en-US",
                "value" : "Deferoxamine"
              }
            ]
          },
          {
            "code" : "442263003",
            "display" : "Defibrotide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Defibrotid"
              },
              {
                "language" : "fr-CH",
                "value" : "défibrotide"
              },
              {
                "language" : "it-CH",
                "value" : "Defibrotide"
              },
              {
                "language" : "rm-CH",
                "value" : "Defibrotid"
              },
              {
                "language" : "en-US",
                "value" : "Defibrotide"
              }
            ]
          },
          {
            "code" : "396012006",
            "display" : "Deflazacort (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deflazacort"
              },
              {
                "language" : "fr-CH",
                "value" : "déflazacort"
              },
              {
                "language" : "it-CH",
                "value" : "Deflazacort"
              },
              {
                "language" : "rm-CH",
                "value" : "Deflazacort"
              },
              {
                "language" : "en-US",
                "value" : "Deflazacort"
              }
            ]
          },
          {
            "code" : "441864003",
            "display" : "Degarelix (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Degarelix"
              },
              {
                "language" : "fr-CH",
                "value" : "dégarélix"
              },
              {
                "language" : "it-CH",
                "value" : "Degarelix"
              },
              {
                "language" : "rm-CH",
                "value" : "Degarelix"
              },
              {
                "language" : "en-US",
                "value" : "Degarelix"
              }
            ]
          },
          {
            "code" : "96225007",
            "display" : "Delta-9-tetrahydrocannabinol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Delta-9-Tetrahydrocannabinol (THC)"
              },
              {
                "language" : "fr-CH",
                "value" : "delta-9-tétrahydrocannabinol (THC)"
              },
              {
                "language" : "it-CH",
                "value" : "Delta-9-tetracannabinolo (THC)"
              },
              {
                "language" : "rm-CH",
                "value" : "Delta-9-Tetrahydrocannabinol (THC)"
              },
              {
                "language" : "en-US",
                "value" : "Delta-9-tetrahydrocannabinol"
              }
            ]
          },
          {
            "code" : "446321003",
            "display" : "Denosumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Denosumab"
              },
              {
                "language" : "fr-CH",
                "value" : "dénosumab"
              },
              {
                "language" : "it-CH",
                "value" : "Denosumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Denosumab"
              },
              {
                "language" : "en-US",
                "value" : "Denosumab"
              }
            ]
          },
          {
            "code" : "386841003",
            "display" : "Desflurane (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Desfluran"
              },
              {
                "language" : "fr-CH",
                "value" : "desflurane"
              },
              {
                "language" : "it-CH",
                "value" : "Desflurano"
              },
              {
                "language" : "rm-CH",
                "value" : "Desfluran"
              },
              {
                "language" : "en-US",
                "value" : "Desflurane"
              }
            ]
          },
          {
            "code" : "396015008",
            "display" : "Desloratadine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Desloratadin"
              },
              {
                "language" : "fr-CH",
                "value" : "desloratadine"
              },
              {
                "language" : "it-CH",
                "value" : "Desloratadina"
              },
              {
                "language" : "rm-CH",
                "value" : "Desloratadin"
              },
              {
                "language" : "en-US",
                "value" : "Desloratadine"
              }
            ]
          },
          {
            "code" : "126189002",
            "display" : "Desmopressin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Desmopressin"
              },
              {
                "language" : "fr-CH",
                "value" : "desmopressine"
              },
              {
                "language" : "it-CH",
                "value" : "Desmopressina"
              },
              {
                "language" : "rm-CH",
                "value" : "Desmopressin"
              },
              {
                "language" : "en-US",
                "value" : "Desmopressin"
              }
            ]
          },
          {
            "code" : "126108008",
            "display" : "Desogestrel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Desogestrel"
              },
              {
                "language" : "fr-CH",
                "value" : "désogestrel"
              },
              {
                "language" : "it-CH",
                "value" : "Desogestrel"
              },
              {
                "language" : "rm-CH",
                "value" : "Desogestrel"
              },
              {
                "language" : "en-US",
                "value" : "Desogestrel"
              }
            ]
          },
          {
            "code" : "372584003",
            "display" : "Dexamethasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexamethason"
              },
              {
                "language" : "fr-CH",
                "value" : "dexaméthasone"
              },
              {
                "language" : "it-CH",
                "value" : "Desametasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexamethason"
              },
              {
                "language" : "en-US",
                "value" : "Dexamethasone"
              }
            ]
          },
          {
            "code" : "387278002",
            "display" : "Dexamfetamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexamfetamin"
              },
              {
                "language" : "fr-CH",
                "value" : "dexamfétamine"
              },
              {
                "language" : "it-CH",
                "value" : "Dexamfetamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexamfetamin"
              },
              {
                "language" : "en-US",
                "value" : "Dexamfetamine"
              }
            ]
          },
          {
            "code" : "418868002",
            "display" : "Dexibuprofen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexibuprofen"
              },
              {
                "language" : "fr-CH",
                "value" : "dexibuprofène"
              },
              {
                "language" : "it-CH",
                "value" : "Dexibuprofene"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexibuprofen"
              },
              {
                "language" : "en-US",
                "value" : "Dexibuprofen"
              }
            ]
          },
          {
            "code" : "396018005",
            "display" : "Dexketoprofen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexketoprofen"
              },
              {
                "language" : "fr-CH",
                "value" : "dexkétoprofène"
              },
              {
                "language" : "it-CH",
                "value" : "Desketoprofene"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexketoprofen"
              },
              {
                "language" : "en-US",
                "value" : "Dexketoprofen"
              }
            ]
          },
          {
            "code" : "441863009",
            "display" : "Dexlansoprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexlansoprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "dexlansoprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Dexlansoprazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexlansoprazol"
              },
              {
                "language" : "en-US",
                "value" : "Dexlansoprazole"
              }
            ]
          },
          {
            "code" : "437750002",
            "display" : "Dexmedetomidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexmedetomidin"
              },
              {
                "language" : "fr-CH",
                "value" : "dexmédétomidine"
              },
              {
                "language" : "it-CH",
                "value" : "Dexmedetomidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexmedetomidin"
              },
              {
                "language" : "en-US",
                "value" : "Dexmedetomidine"
              }
            ]
          },
          {
            "code" : "767715008",
            "display" : "Dexmethylphenidate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexmethylphenidat"
              },
              {
                "language" : "fr-CH",
                "value" : "dexméthylphénidate"
              },
              {
                "language" : "it-CH",
                "value" : "Dexmetilfenidato"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexmethylphenidat"
              },
              {
                "language" : "en-US",
                "value" : "Dexmethylphenidate"
              }
            ]
          },
          {
            "code" : "126226000",
            "display" : "Dexpanthenol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexpanthenol"
              },
              {
                "language" : "fr-CH",
                "value" : "dexpanthénol"
              },
              {
                "language" : "it-CH",
                "value" : "Despantenolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexpanthenol"
              },
              {
                "language" : "en-US",
                "value" : "Dexpanthenol"
              }
            ]
          },
          {
            "code" : "108825009",
            "display" : "Dexrazoxane (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dexrazoxan"
              },
              {
                "language" : "fr-CH",
                "value" : "dexrazoxane"
              },
              {
                "language" : "it-CH",
                "value" : "Dexrazoxano"
              },
              {
                "language" : "rm-CH",
                "value" : "Dexrazoxan"
              },
              {
                "language" : "en-US",
                "value" : "Dexrazoxane"
              }
            ]
          },
          {
            "code" : "387114001",
            "display" : "Dextromethorphan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dextromethorphan"
              },
              {
                "language" : "fr-CH",
                "value" : "dextrométhorphane"
              },
              {
                "language" : "it-CH",
                "value" : "Destrometorfano"
              },
              {
                "language" : "rm-CH",
                "value" : "Dextromethorphan"
              },
              {
                "language" : "en-US",
                "value" : "Dextromethorphan"
              }
            ]
          },
          {
            "code" : "387341002",
            "display" : "Diamorphine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Heroin"
              },
              {
                "language" : "fr-CH",
                "value" : "héroïne"
              },
              {
                "language" : "it-CH",
                "value" : "Eroina"
              },
              {
                "language" : "rm-CH",
                "value" : "Heroin"
              },
              {
                "language" : "en-US",
                "value" : "Diamorphine"
              }
            ]
          },
          {
            "code" : "387264003",
            "display" : "Diazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "diazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Diazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Diazepam"
              },
              {
                "language" : "en-US",
                "value" : "Diazepam"
              }
            ]
          },
          {
            "code" : "7034005",
            "display" : "Diclofenac (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diclofenac"
              },
              {
                "language" : "fr-CH",
                "value" : "diclofénac"
              },
              {
                "language" : "it-CH",
                "value" : "Diclofenac"
              },
              {
                "language" : "rm-CH",
                "value" : "Diclofenac"
              },
              {
                "language" : "en-US",
                "value" : "Diclofenac"
              }
            ]
          },
          {
            "code" : "703097002",
            "display" : "Dienogest (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dienogest"
              },
              {
                "language" : "fr-CH",
                "value" : "diénogest"
              },
              {
                "language" : "it-CH",
                "value" : "Dienogest"
              },
              {
                "language" : "rm-CH",
                "value" : "Dienogest"
              },
              {
                "language" : "en-US",
                "value" : "Dienogest"
              }
            ]
          },
          {
            "code" : "395965007",
            "display" : "Diflucortolone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diflucortolon"
              },
              {
                "language" : "fr-CH",
                "value" : "diflucortolone"
              },
              {
                "language" : "it-CH",
                "value" : "Diflucortolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Diflucortolon"
              },
              {
                "language" : "en-US",
                "value" : "Diflucortolone"
              }
            ]
          },
          {
            "code" : "373534001",
            "display" : "Digitoxin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Digitoxin"
              },
              {
                "language" : "fr-CH",
                "value" : "digitoxine"
              },
              {
                "language" : "it-CH",
                "value" : "Digitossina"
              },
              {
                "language" : "rm-CH",
                "value" : "Digitoxin"
              },
              {
                "language" : "en-US",
                "value" : "Digitoxin"
              }
            ]
          },
          {
            "code" : "387461009",
            "display" : "Digoxin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Digoxin"
              },
              {
                "language" : "fr-CH",
                "value" : "digoxine"
              },
              {
                "language" : "it-CH",
                "value" : "Digossina"
              },
              {
                "language" : "rm-CH",
                "value" : "Digoxin"
              },
              {
                "language" : "en-US",
                "value" : "Digoxin"
              }
            ]
          },
          {
            "code" : "703113001",
            "display" : "Dihydralazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dihydralazin"
              },
              {
                "language" : "fr-CH",
                "value" : "dihydralazine"
              },
              {
                "language" : "it-CH",
                "value" : "Diidralazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dihydralazin"
              },
              {
                "language" : "en-US",
                "value" : "Dihydralazine"
              }
            ]
          },
          {
            "code" : "387322000",
            "display" : "Dihydrocodeine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dihydrocodein"
              },
              {
                "language" : "fr-CH",
                "value" : "dihydrocodéine"
              },
              {
                "language" : "it-CH",
                "value" : "Diidrocodeina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dihydrocodein"
              },
              {
                "language" : "en-US",
                "value" : "Dihydrocodeine"
              }
            ]
          },
          {
            "code" : "372793000",
            "display" : "Diltiazem (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diltiazem"
              },
              {
                "language" : "fr-CH",
                "value" : "diltiazem"
              },
              {
                "language" : "it-CH",
                "value" : "Diltiazem"
              },
              {
                "language" : "rm-CH",
                "value" : "Diltiazem"
              },
              {
                "language" : "en-US",
                "value" : "Diltiazem"
              }
            ]
          },
          {
            "code" : "387469006",
            "display" : "Dimenhydrinate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dimenhydrinat"
              },
              {
                "language" : "fr-CH",
                "value" : "diménhydrinate"
              },
              {
                "language" : "it-CH",
                "value" : "Dimenidrinato"
              },
              {
                "language" : "rm-CH",
                "value" : "Dimenhydrinat"
              },
              {
                "language" : "en-US",
                "value" : "Dimenhydrinate"
              }
            ]
          },
          {
            "code" : "115535002",
            "display" : "Dimethyl sulfoxide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dimethylsulfoxid"
              },
              {
                "language" : "fr-CH",
                "value" : "diméthylsulfoxyde"
              },
              {
                "language" : "it-CH",
                "value" : "Dimetilsolfossido (DMSO)"
              },
              {
                "language" : "rm-CH",
                "value" : "Dimethylsulfoxid"
              },
              {
                "language" : "en-US",
                "value" : "Dimethyl sulfoxide"
              }
            ]
          },
          {
            "code" : "396031000",
            "display" : "Dimeticone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dimeticon"
              },
              {
                "language" : "fr-CH",
                "value" : "diméticone"
              },
              {
                "language" : "it-CH",
                "value" : "Dimeticone"
              },
              {
                "language" : "rm-CH",
                "value" : "Dimeticon"
              },
              {
                "language" : "en-US",
                "value" : "Dimeticone"
              }
            ]
          },
          {
            "code" : "387142004",
            "display" : "Dimetindene (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dimetinden"
              },
              {
                "language" : "fr-CH",
                "value" : "dimétindène"
              },
              {
                "language" : "it-CH",
                "value" : "Dimetindene"
              },
              {
                "language" : "rm-CH",
                "value" : "Dimetinden"
              },
              {
                "language" : "en-US",
                "value" : "Dimetindene"
              }
            ]
          },
          {
            "code" : "387245009",
            "display" : "Dinoprostone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dinoproston"
              },
              {
                "language" : "fr-CH",
                "value" : "dinoprostone"
              },
              {
                "language" : "it-CH",
                "value" : "Dinoprostone"
              },
              {
                "language" : "rm-CH",
                "value" : "Dinoproston"
              },
              {
                "language" : "en-US",
                "value" : "Dinoprostone"
              }
            ]
          },
          {
            "code" : "8143001",
            "display" : "Diosmin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diosmin"
              },
              {
                "language" : "fr-CH",
                "value" : "diosmine"
              },
              {
                "language" : "it-CH",
                "value" : "Diosmina"
              },
              {
                "language" : "rm-CH",
                "value" : "Diosmin"
              },
              {
                "language" : "en-US",
                "value" : "Diosmin"
              }
            ]
          },
          {
            "code" : "372682005",
            "display" : "Diphenhydramine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diphenhydramin"
              },
              {
                "language" : "fr-CH",
                "value" : "diphénhydramine"
              },
              {
                "language" : "it-CH",
                "value" : "Difenidramina"
              },
              {
                "language" : "rm-CH",
                "value" : "Diphenhydramin"
              },
              {
                "language" : "en-US",
                "value" : "Diphenhydramine"
              }
            ]
          },
          {
            "code" : "387453004",
            "display" : "Dipotassium clorazepate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dikalium clorazepat"
              },
              {
                "language" : "fr-CH",
                "value" : "clorazépate dipotassique"
              },
              {
                "language" : "it-CH",
                "value" : "Clorazepato potassico"
              },
              {
                "language" : "rm-CH",
                "value" : "Dikalium clorazepat"
              },
              {
                "language" : "en-US",
                "value" : "Dipotassium clorazepate"
              }
            ]
          },
          {
            "code" : "387212009",
            "display" : "Disulfiram (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Disulfiram"
              },
              {
                "language" : "fr-CH",
                "value" : "disulfirame"
              },
              {
                "language" : "it-CH",
                "value" : "Disulfiram"
              },
              {
                "language" : "rm-CH",
                "value" : "Disulfiram"
              },
              {
                "language" : "en-US",
                "value" : "Disulfiram"
              }
            ]
          },
          {
            "code" : "83438009",
            "display" : "Dobesilate calcium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Calcium dobesilat"
              },
              {
                "language" : "fr-CH",
                "value" : "dobésilate de calcium"
              },
              {
                "language" : "it-CH",
                "value" : "Calcio dobesilato"
              },
              {
                "language" : "rm-CH",
                "value" : "Calcium dobesilat"
              },
              {
                "language" : "en-US",
                "value" : "Dobesilate calcium"
              }
            ]
          },
          {
            "code" : "387145002",
            "display" : "Dobutamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dobutamin"
              },
              {
                "language" : "fr-CH",
                "value" : "dobutamine"
              },
              {
                "language" : "it-CH",
                "value" : "Dobutamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dobutamin"
              },
              {
                "language" : "en-US",
                "value" : "Dobutamine"
              }
            ]
          },
          {
            "code" : "386918005",
            "display" : "Docetaxel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Docetaxel"
              },
              {
                "language" : "fr-CH",
                "value" : "docétaxel"
              },
              {
                "language" : "it-CH",
                "value" : "Docetaxel"
              },
              {
                "language" : "rm-CH",
                "value" : "Docetaxel"
              },
              {
                "language" : "en-US",
                "value" : "Docetaxel"
              }
            ]
          },
          {
            "code" : "226368001",
            "display" : "Docosahexaenoic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Docosahexaensäure DHA"
              },
              {
                "language" : "fr-CH",
                "value" : "acide docosahexaénoïque DHA"
              },
              {
                "language" : "it-CH",
                "value" : "Acido docosaesaenoico (DHA)"
              },
              {
                "language" : "rm-CH",
                "value" : "Docosahexaensäure DHA"
              },
              {
                "language" : "en-US",
                "value" : "Docosahexaenoic acid"
              }
            ]
          },
          {
            "code" : "713464000",
            "display" : "Dolutegravir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dolutegravir"
              },
              {
                "language" : "fr-CH",
                "value" : "dolutégravir"
              },
              {
                "language" : "it-CH",
                "value" : "Dolutegravir"
              },
              {
                "language" : "rm-CH",
                "value" : "Dolutegravir"
              },
              {
                "language" : "en-US",
                "value" : "Dolutegravir"
              }
            ]
          },
          {
            "code" : "387181004",
            "display" : "Domperidone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Domperidon"
              },
              {
                "language" : "fr-CH",
                "value" : "dompéridone"
              },
              {
                "language" : "it-CH",
                "value" : "Domperidone"
              },
              {
                "language" : "rm-CH",
                "value" : "Domperidon"
              },
              {
                "language" : "en-US",
                "value" : "Domperidone"
              }
            ]
          },
          {
            "code" : "386855006",
            "display" : "Donepezil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Donepezil"
              },
              {
                "language" : "fr-CH",
                "value" : "donépézil"
              },
              {
                "language" : "it-CH",
                "value" : "Donepezil"
              },
              {
                "language" : "rm-CH",
                "value" : "Donepezil"
              },
              {
                "language" : "en-US",
                "value" : "Donepezil"
              }
            ]
          },
          {
            "code" : "412383006",
            "display" : "Dopamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dopamin"
              },
              {
                "language" : "fr-CH",
                "value" : "dopamine"
              },
              {
                "language" : "it-CH",
                "value" : "Dopamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Dopamin"
              },
              {
                "language" : "en-US",
                "value" : "Dopamine"
              }
            ]
          },
          {
            "code" : "386882003",
            "display" : "Dornase alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dornase alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "dornase alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Dornase alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Dornase alfa"
              },
              {
                "language" : "en-US",
                "value" : "Dornase alfa"
              }
            ]
          },
          {
            "code" : "373447009",
            "display" : "Dorzolamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dorzolamid"
              },
              {
                "language" : "fr-CH",
                "value" : "dorzolamide"
              },
              {
                "language" : "it-CH",
                "value" : "Dorzolamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Dorzolamid"
              },
              {
                "language" : "en-US",
                "value" : "Dorzolamide"
              }
            ]
          },
          {
            "code" : "373339005",
            "display" : "Doxapram (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Doxapram"
              },
              {
                "language" : "fr-CH",
                "value" : "doxapram"
              },
              {
                "language" : "it-CH",
                "value" : "Doxapram"
              },
              {
                "language" : "rm-CH",
                "value" : "Doxapram"
              },
              {
                "language" : "en-US",
                "value" : "Doxapram"
              }
            ]
          },
          {
            "code" : "372508002",
            "display" : "Doxazosin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Doxazosin"
              },
              {
                "language" : "fr-CH",
                "value" : "doxazosine"
              },
              {
                "language" : "it-CH",
                "value" : "Doxazosina"
              },
              {
                "language" : "rm-CH",
                "value" : "Doxazosin"
              },
              {
                "language" : "en-US",
                "value" : "Doxazosin"
              }
            ]
          },
          {
            "code" : "372587005",
            "display" : "Doxepin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Doxepin"
              },
              {
                "language" : "fr-CH",
                "value" : "doxépine"
              },
              {
                "language" : "it-CH",
                "value" : "Doxepina"
              },
              {
                "language" : "rm-CH",
                "value" : "Doxepin"
              },
              {
                "language" : "en-US",
                "value" : "Doxepin"
              }
            ]
          },
          {
            "code" : "372817009",
            "display" : "Doxorubicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Doxorubicin"
              },
              {
                "language" : "fr-CH",
                "value" : "doxorubicine"
              },
              {
                "language" : "it-CH",
                "value" : "Doxorubicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Doxorubicin"
              },
              {
                "language" : "en-US",
                "value" : "Doxorubicin"
              }
            ]
          },
          {
            "code" : "372478003",
            "display" : "Doxycycline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Doxycyclin"
              },
              {
                "language" : "fr-CH",
                "value" : "doxycycline"
              },
              {
                "language" : "it-CH",
                "value" : "Doxiciclina"
              },
              {
                "language" : "rm-CH",
                "value" : "Doxycyclin"
              },
              {
                "language" : "en-US",
                "value" : "Doxycycline"
              }
            ]
          },
          {
            "code" : "71417000",
            "display" : "Doxycycline hyclate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Doxycyclin hyclat"
              },
              {
                "language" : "fr-CH",
                "value" : "doxycycline hyclate"
              },
              {
                "language" : "it-CH",
                "value" : "Doxiciclina iclato"
              },
              {
                "language" : "rm-CH",
                "value" : "Doxycyclin hyclat"
              },
              {
                "language" : "en-US",
                "value" : "Doxycycline hyclate"
              }
            ]
          },
          {
            "code" : "44068004",
            "display" : "Doxylamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Doxylamin"
              },
              {
                "language" : "fr-CH",
                "value" : "doxylamine"
              },
              {
                "language" : "it-CH",
                "value" : "Doxilamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Doxylamin"
              },
              {
                "language" : "en-US",
                "value" : "Doxylamine"
              }
            ]
          },
          {
            "code" : "443195003",
            "display" : "Dronedarone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dronedaron"
              },
              {
                "language" : "fr-CH",
                "value" : "dronédarone"
              },
              {
                "language" : "it-CH",
                "value" : "Dronedarone"
              },
              {
                "language" : "rm-CH",
                "value" : "Dronedaron"
              },
              {
                "language" : "en-US",
                "value" : "Dronedarone"
              }
            ]
          },
          {
            "code" : "387146001",
            "display" : "Droperidol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Droperidol"
              },
              {
                "language" : "fr-CH",
                "value" : "dropéridol"
              },
              {
                "language" : "it-CH",
                "value" : "Droperidolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Droperidol"
              },
              {
                "language" : "en-US",
                "value" : "Droperidol"
              }
            ]
          },
          {
            "code" : "410919000",
            "display" : "Drospirenone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Drospirenon"
              },
              {
                "language" : "fr-CH",
                "value" : "drospirénone"
              },
              {
                "language" : "it-CH",
                "value" : "Drospirenone"
              },
              {
                "language" : "rm-CH",
                "value" : "Drospirenon"
              },
              {
                "language" : "en-US",
                "value" : "Drospirenone"
              }
            ]
          },
          {
            "code" : "714080005",
            "display" : "Dulaglutide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dulaglutid"
              },
              {
                "language" : "fr-CH",
                "value" : "dulaglutide"
              },
              {
                "language" : "it-CH",
                "value" : "Dulaglutide"
              },
              {
                "language" : "rm-CH",
                "value" : "Dulaglutid"
              },
              {
                "language" : "en-US",
                "value" : "Dulaglutide"
              }
            ]
          },
          {
            "code" : "407032004",
            "display" : "Duloxetine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Duloxetin"
              },
              {
                "language" : "fr-CH",
                "value" : "duloxétine"
              },
              {
                "language" : "it-CH",
                "value" : "Duloxetina"
              },
              {
                "language" : "rm-CH",
                "value" : "Duloxetin"
              },
              {
                "language" : "en-US",
                "value" : "Duloxetine"
              }
            ]
          },
          {
            "code" : "733487000",
            "display" : "Dupilumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dupilumab"
              },
              {
                "language" : "fr-CH",
                "value" : "dupilumab"
              },
              {
                "language" : "it-CH",
                "value" : "Dupilumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Dupilumab"
              },
              {
                "language" : "en-US",
                "value" : "Dupilumab"
              }
            ]
          },
          {
            "code" : "735230005",
            "display" : "Durvalumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Durvalumab"
              },
              {
                "language" : "fr-CH",
                "value" : "durvalumab"
              },
              {
                "language" : "it-CH",
                "value" : "Durvalumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Durvalumab"
              },
              {
                "language" : "en-US",
                "value" : "Durvalumab"
              }
            ]
          },
          {
            "code" : "385572003",
            "display" : "Dutasteride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dutasterid"
              },
              {
                "language" : "fr-CH",
                "value" : "dutastéride"
              },
              {
                "language" : "it-CH",
                "value" : "Dutasteride"
              },
              {
                "language" : "rm-CH",
                "value" : "Dutasterid"
              },
              {
                "language" : "en-US",
                "value" : "Dutasteride"
              }
            ]
          },
          {
            "code" : "126093005",
            "display" : "Dydrogesterone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dydrogesteron"
              },
              {
                "language" : "fr-CH",
                "value" : "dydrogestérone"
              },
              {
                "language" : "it-CH",
                "value" : "Didrogesterone"
              },
              {
                "language" : "rm-CH",
                "value" : "Dydrogesteron"
              },
              {
                "language" : "en-US",
                "value" : "Dydrogesterone"
              }
            ]
          },
          {
            "code" : "373471002",
            "display" : "Econazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Econazol"
              },
              {
                "language" : "fr-CH",
                "value" : "éconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Econazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Econazol"
              },
              {
                "language" : "en-US",
                "value" : "Econazole"
              }
            ]
          },
          {
            "code" : "427429004",
            "display" : "Eculizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eculizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "éculizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Eculizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Eculizumab"
              },
              {
                "language" : "en-US",
                "value" : "Eculizumab"
              }
            ]
          },
          {
            "code" : "712778008",
            "display" : "Edoxaban (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Edoxaban"
              },
              {
                "language" : "fr-CH",
                "value" : "édoxaban"
              },
              {
                "language" : "it-CH",
                "value" : "Edoxaban"
              },
              {
                "language" : "rm-CH",
                "value" : "Edoxaban"
              },
              {
                "language" : "en-US",
                "value" : "Edoxaban"
              }
            ]
          },
          {
            "code" : "387001004",
            "display" : "Efavirenz (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Efavirenz"
              },
              {
                "language" : "fr-CH",
                "value" : "éfavirenz"
              },
              {
                "language" : "it-CH",
                "value" : "Efavirenz"
              },
              {
                "language" : "rm-CH",
                "value" : "Efavirenz"
              },
              {
                "language" : "en-US",
                "value" : "Efavirenz"
              }
            ]
          },
          {
            "code" : "226367006",
            "display" : "Eicosapentaenoic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eicosapentaensäure EPA"
              },
              {
                "language" : "fr-CH",
                "value" : "acide eicosapentaénoïque EPA"
              },
              {
                "language" : "it-CH",
                "value" : "Acido eicosapentaenoico EPA"
              },
              {
                "language" : "rm-CH",
                "value" : "Eicosapentaensäure EPA"
              },
              {
                "language" : "en-US",
                "value" : "Eicosapentaenoic acid"
              }
            ]
          },
          {
            "code" : "410843003",
            "display" : "Eletriptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eletriptan"
              },
              {
                "language" : "fr-CH",
                "value" : "élétriptan"
              },
              {
                "language" : "it-CH",
                "value" : "Eletriptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Eletriptan"
              },
              {
                "language" : "en-US",
                "value" : "Eletriptan"
              }
            ]
          },
          {
            "code" : "715660001",
            "display" : "Elotuzumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Elotuzumab"
              },
              {
                "language" : "fr-CH",
                "value" : "élotuzumab"
              },
              {
                "language" : "it-CH",
                "value" : "Elotuzumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Elotuzumab"
              },
              {
                "language" : "en-US",
                "value" : "Elotuzumab"
              }
            ]
          },
          {
            "code" : "432005001",
            "display" : "Eltrombopag (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eltrombopag"
              },
              {
                "language" : "fr-CH",
                "value" : "eltrombopag"
              },
              {
                "language" : "it-CH",
                "value" : "Eltrombopag"
              },
              {
                "language" : "rm-CH",
                "value" : "Eltrombopag"
              },
              {
                "language" : "en-US",
                "value" : "Eltrombopag"
              }
            ]
          },
          {
            "code" : "708828000",
            "display" : "Elvitegravir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Elvitegravir"
              },
              {
                "language" : "fr-CH",
                "value" : "elvitégravir"
              },
              {
                "language" : "it-CH",
                "value" : "Elvitegravir"
              },
              {
                "language" : "rm-CH",
                "value" : "Elvitegravir"
              },
              {
                "language" : "en-US",
                "value" : "Elvitegravir"
              }
            ]
          },
          {
            "code" : "372551003",
            "display" : "Emedastine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Emedastin"
              },
              {
                "language" : "fr-CH",
                "value" : "émédastine"
              },
              {
                "language" : "it-CH",
                "value" : "Emedastina"
              },
              {
                "language" : "rm-CH",
                "value" : "Emedastin"
              },
              {
                "language" : "en-US",
                "value" : "Emedastine"
              }
            ]
          },
          {
            "code" : "763611007",
            "display" : "Emicizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Emicizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "emicizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Emicizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Emicizumab"
              },
              {
                "language" : "en-US",
                "value" : "Emicizumab"
              }
            ]
          },
          {
            "code" : "703894008",
            "display" : "Empagliflozin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Empagliflozin"
              },
              {
                "language" : "fr-CH",
                "value" : "empagliflozine"
              },
              {
                "language" : "it-CH",
                "value" : "Empagliflozin"
              },
              {
                "language" : "rm-CH",
                "value" : "Empagliflozin"
              },
              {
                "language" : "en-US",
                "value" : "Empagliflozin"
              }
            ]
          },
          {
            "code" : "404856006",
            "display" : "Emtricitabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Emtricitabin"
              },
              {
                "language" : "fr-CH",
                "value" : "emtricitabine"
              },
              {
                "language" : "it-CH",
                "value" : "Emtricitabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Emtricitabin"
              },
              {
                "language" : "en-US",
                "value" : "Emtricitabine"
              }
            ]
          },
          {
            "code" : "372658000",
            "display" : "Enalapril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Enalapril"
              },
              {
                "language" : "fr-CH",
                "value" : "énalapril"
              },
              {
                "language" : "it-CH",
                "value" : "Enalapril"
              },
              {
                "language" : "rm-CH",
                "value" : "Enalapril"
              },
              {
                "language" : "en-US",
                "value" : "Enalapril"
              }
            ]
          },
          {
            "code" : "772201002",
            "display" : "Encorafenib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Encorafenib"
              },
              {
                "language" : "fr-CH",
                "value" : "encorafénib"
              },
              {
                "language" : "it-CH",
                "value" : "Encorafenib"
              },
              {
                "language" : "rm-CH",
                "value" : "Encorafenib"
              },
              {
                "language" : "en-US",
                "value" : "Encorafenib"
              }
            ]
          },
          {
            "code" : "108983001",
            "display" : "Enoxaparin sodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Enoxaparin natrium"
              },
              {
                "language" : "fr-CH",
                "value" : "énoxaparine sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Enoxaparina sodica"
              },
              {
                "language" : "rm-CH",
                "value" : "Enoxaparin natrium"
              },
              {
                "language" : "en-US",
                "value" : "Enoxaparin sodium"
              }
            ]
          },
          {
            "code" : "387018000",
            "display" : "Entacapone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Entacapon"
              },
              {
                "language" : "fr-CH",
                "value" : "entacapone"
              },
              {
                "language" : "it-CH",
                "value" : "Entacapone"
              },
              {
                "language" : "rm-CH",
                "value" : "Entacapon"
              },
              {
                "language" : "en-US",
                "value" : "Entacapone"
              }
            ]
          },
          {
            "code" : "416644000",
            "display" : "Entecavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Entecavir"
              },
              {
                "language" : "fr-CH",
                "value" : "entécavir"
              },
              {
                "language" : "it-CH",
                "value" : "Entacavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Entecavir"
              },
              {
                "language" : "en-US",
                "value" : "Entecavir"
              }
            ]
          },
          {
            "code" : "256012001",
            "display" : "Eosine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eosin"
              },
              {
                "language" : "fr-CH",
                "value" : "éosine"
              },
              {
                "language" : "it-CH",
                "value" : "Eosina"
              },
              {
                "language" : "rm-CH",
                "value" : "Eosin"
              },
              {
                "language" : "en-US",
                "value" : "Eosine"
              }
            ]
          },
          {
            "code" : "387358007",
            "display" : "Ephedrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ephedrin"
              },
              {
                "language" : "fr-CH",
                "value" : "éphédrine"
              },
              {
                "language" : "it-CH",
                "value" : "Efedrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ephedrin"
              },
              {
                "language" : "en-US",
                "value" : "Ephedrine"
              }
            ]
          },
          {
            "code" : "76525000",
            "display" : "Ephedrine sulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ephedrin sulfat"
              },
              {
                "language" : "fr-CH",
                "value" : "éphédrine sulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Efedrina solfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Ephedrin sulfat"
              },
              {
                "language" : "en-US",
                "value" : "Ephedrine sulfate"
              }
            ]
          },
          {
            "code" : "407068009",
            "display" : "Epinastine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Epinastin"
              },
              {
                "language" : "fr-CH",
                "value" : "épinastine"
              },
              {
                "language" : "it-CH",
                "value" : "Epinastine"
              },
              {
                "language" : "rm-CH",
                "value" : "Epinastin"
              },
              {
                "language" : "en-US",
                "value" : "Epinastine"
              }
            ]
          },
          {
            "code" : "387362001",
            "display" : "Epinephrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Adrenalin (Epinephrin)"
              },
              {
                "language" : "fr-CH",
                "value" : "adrénaline (épinéphrine)"
              },
              {
                "language" : "it-CH",
                "value" : "Adrenalina (epinefrina)"
              },
              {
                "language" : "rm-CH",
                "value" : "Adrenalin (Epinephrin)"
              },
              {
                "language" : "en-US",
                "value" : "Epinephrine"
              }
            ]
          },
          {
            "code" : "417916005",
            "display" : "Epirubicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Epirubicin"
              },
              {
                "language" : "fr-CH",
                "value" : "épirubicine"
              },
              {
                "language" : "it-CH",
                "value" : "Epirubicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Epirubicin"
              },
              {
                "language" : "en-US",
                "value" : "Epirubicin"
              }
            ]
          },
          {
            "code" : "407010008",
            "display" : "Eplerenone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eplerenon"
              },
              {
                "language" : "fr-CH",
                "value" : "éplérénone"
              },
              {
                "language" : "it-CH",
                "value" : "Eplerenone"
              },
              {
                "language" : "rm-CH",
                "value" : "Eplerenon"
              },
              {
                "language" : "en-US",
                "value" : "Eplerenone"
              }
            ]
          },
          {
            "code" : "386947003",
            "display" : "Epoetin alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Epoetin alfa rekombiniert"
              },
              {
                "language" : "fr-CH",
                "value" : "époétine alfa recombinante"
              },
              {
                "language" : "it-CH",
                "value" : "Epoetina alfa ricombinante"
              },
              {
                "language" : "rm-CH",
                "value" : "Epoetin alfa rekombiniert"
              },
              {
                "language" : "en-US",
                "value" : "Epoetin alfa"
              }
            ]
          },
          {
            "code" : "396043004",
            "display" : "Epoetin beta (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Epoetin beta rekombiniert"
              },
              {
                "language" : "fr-CH",
                "value" : "époétine bêta recombinante"
              },
              {
                "language" : "it-CH",
                "value" : "Epoetina beta ricombinante"
              },
              {
                "language" : "rm-CH",
                "value" : "Epoetin beta rekombiniert"
              },
              {
                "language" : "en-US",
                "value" : "Epoetin beta"
              }
            ]
          },
          {
            "code" : "708829008",
            "display" : "Epoetin theta (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Epoetin theta"
              },
              {
                "language" : "fr-CH",
                "value" : "époétine thêta"
              },
              {
                "language" : "it-CH",
                "value" : "Epoetina teta ricombinante"
              },
              {
                "language" : "rm-CH",
                "value" : "Epoetin theta"
              },
              {
                "language" : "en-US",
                "value" : "Epoetin theta"
              }
            ]
          },
          {
            "code" : "372513003",
            "display" : "Epoprostenol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Epoprostenol"
              },
              {
                "language" : "fr-CH",
                "value" : "époprosténol"
              },
              {
                "language" : "it-CH",
                "value" : "Epoprostenolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Epoprostenol"
              },
              {
                "language" : "en-US",
                "value" : "Epoprostenol"
              }
            ]
          },
          {
            "code" : "396044005",
            "display" : "Eprosartan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eprosartan"
              },
              {
                "language" : "fr-CH",
                "value" : "éprosartan"
              },
              {
                "language" : "it-CH",
                "value" : "Eprosartan"
              },
              {
                "language" : "rm-CH",
                "value" : "Eprosartan"
              },
              {
                "language" : "en-US",
                "value" : "Eprosartan"
              }
            ]
          },
          {
            "code" : "116066006",
            "display" : "Eptacog alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eptacog alfa (aktiviert)"
              },
              {
                "language" : "fr-CH",
                "value" : "eptacogum alfa (activatum)"
              },
              {
                "language" : "it-CH",
                "value" : "Eptacog alfa (attivato)"
              },
              {
                "language" : "rm-CH",
                "value" : "Eptacog alfa (aktiviert)"
              },
              {
                "language" : "en-US",
                "value" : "Eptacog alfa"
              }
            ]
          },
          {
            "code" : "386998009",
            "display" : "Eptifibatide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eptifibatid"
              },
              {
                "language" : "fr-CH",
                "value" : "eptifibatide"
              },
              {
                "language" : "it-CH",
                "value" : "Eptifibatide"
              },
              {
                "language" : "rm-CH",
                "value" : "Eptifibatid"
              },
              {
                "language" : "en-US",
                "value" : "Eptifibatide"
              }
            ]
          },
          {
            "code" : "426292005",
            "display" : "Erdosteine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erdostein"
              },
              {
                "language" : "fr-CH",
                "value" : "erdostéine"
              },
              {
                "language" : "it-CH",
                "value" : "Erdosteina"
              },
              {
                "language" : "rm-CH",
                "value" : "Erdostein"
              },
              {
                "language" : "en-US",
                "value" : "Erdosteine"
              }
            ]
          },
          {
            "code" : "771590007",
            "display" : "Erenumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erenumab"
              },
              {
                "language" : "fr-CH",
                "value" : "erénumab"
              },
              {
                "language" : "it-CH",
                "value" : "Erenumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Erenumab"
              },
              {
                "language" : "en-US",
                "value" : "Erenumab"
              }
            ]
          },
          {
            "code" : "708166000",
            "display" : "Eribulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eribulin"
              },
              {
                "language" : "fr-CH",
                "value" : "éribuline"
              },
              {
                "language" : "it-CH",
                "value" : "Eribulina"
              },
              {
                "language" : "rm-CH",
                "value" : "Eribulin"
              },
              {
                "language" : "en-US",
                "value" : "Eribulin"
              }
            ]
          },
          {
            "code" : "414123001",
            "display" : "Erlotinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erlotinib"
              },
              {
                "language" : "fr-CH",
                "value" : "erlotinib"
              },
              {
                "language" : "it-CH",
                "value" : "Erlotinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Erlotinib"
              },
              {
                "language" : "en-US",
                "value" : "Erlotinib"
              }
            ]
          },
          {
            "code" : "396346003",
            "display" : "Ertapenem (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ertapenem"
              },
              {
                "language" : "fr-CH",
                "value" : "ertapénem"
              },
              {
                "language" : "it-CH",
                "value" : "Ertapenem"
              },
              {
                "language" : "rm-CH",
                "value" : "Ertapenem"
              },
              {
                "language" : "en-US",
                "value" : "Ertapenem"
              }
            ]
          },
          {
            "code" : "764274008",
            "display" : "Ertugliflozin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ertugliflozin"
              },
              {
                "language" : "fr-CH",
                "value" : "ertugliflozine"
              },
              {
                "language" : "it-CH",
                "value" : "Ertugliflozin"
              },
              {
                "language" : "rm-CH",
                "value" : "Ertugliflozin"
              },
              {
                "language" : "en-US",
                "value" : "Ertugliflozin"
              }
            ]
          },
          {
            "code" : "372694001",
            "display" : "Erythromycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erythromycin"
              },
              {
                "language" : "fr-CH",
                "value" : "érythromycine"
              },
              {
                "language" : "it-CH",
                "value" : "Eritromicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Erythromycin"
              },
              {
                "language" : "en-US",
                "value" : "Erythromycin"
              }
            ]
          },
          {
            "code" : "400447003",
            "display" : "Escitalopram (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Escitalopram"
              },
              {
                "language" : "fr-CH",
                "value" : "escitalopram"
              },
              {
                "language" : "it-CH",
                "value" : "Escitalopram"
              },
              {
                "language" : "rm-CH",
                "value" : "Escitalopram"
              },
              {
                "language" : "en-US",
                "value" : "Escitalopram"
              }
            ]
          },
          {
            "code" : "372847006",
            "display" : "Esmolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Esmolol"
              },
              {
                "language" : "fr-CH",
                "value" : "esmolol"
              },
              {
                "language" : "it-CH",
                "value" : "Esmololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Esmolol"
              },
              {
                "language" : "en-US",
                "value" : "Esmolol"
              }
            ]
          },
          {
            "code" : "396047003",
            "display" : "Esomeprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Esomeprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "ésoméprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Esomeprazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Esomeprazol"
              },
              {
                "language" : "en-US",
                "value" : "Esomeprazole"
              }
            ]
          },
          {
            "code" : "126172005",
            "display" : "Estradiol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Estradiol"
              },
              {
                "language" : "fr-CH",
                "value" : "estradiol"
              },
              {
                "language" : "it-CH",
                "value" : "Estradiolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Estradiol"
              },
              {
                "language" : "en-US",
                "value" : "Estradiol"
              }
            ]
          },
          {
            "code" : "116070003",
            "display" : "Estradiol hemihydrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Estradiol hemihydrat"
              },
              {
                "language" : "fr-CH",
                "value" : "estradiol hémihydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Estradiolo emiidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Estradiol hemihydrat"
              },
              {
                "language" : "en-US",
                "value" : "Estradiol hemihydrate"
              }
            ]
          },
          {
            "code" : "96350008",
            "display" : "Estradiol valerate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Estradiol valerat"
              },
              {
                "language" : "fr-CH",
                "value" : "estradiol valérate"
              },
              {
                "language" : "it-CH",
                "value" : "Estradiolo valerato"
              },
              {
                "language" : "rm-CH",
                "value" : "Estradiol valerat"
              },
              {
                "language" : "en-US",
                "value" : "Estradiol valerate"
              }
            ]
          },
          {
            "code" : "73723004",
            "display" : "Estriol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Estriol"
              },
              {
                "language" : "fr-CH",
                "value" : "estriol"
              },
              {
                "language" : "it-CH",
                "value" : "Estriolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Estriol"
              },
              {
                "language" : "en-US",
                "value" : "Estriol"
              }
            ]
          },
          {
            "code" : "387045004",
            "display" : "Etanercept (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etanercept"
              },
              {
                "language" : "fr-CH",
                "value" : "étanercept"
              },
              {
                "language" : "it-CH",
                "value" : "Etanercept"
              },
              {
                "language" : "rm-CH",
                "value" : "Etanercept"
              },
              {
                "language" : "en-US",
                "value" : "Etanercept"
              }
            ]
          },
          {
            "code" : "723539000",
            "display" : "Etelcalcetide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etelcalcetid"
              },
              {
                "language" : "fr-CH",
                "value" : "ételcalcétide"
              },
              {
                "language" : "it-CH",
                "value" : "Etelcalcetide"
              },
              {
                "language" : "rm-CH",
                "value" : "Etelcalcetid"
              },
              {
                "language" : "en-US",
                "value" : "Etelcalcetide"
              }
            ]
          },
          {
            "code" : "711320003",
            "display" : "Ethacridine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ethacridin"
              },
              {
                "language" : "fr-CH",
                "value" : "éthacridine"
              },
              {
                "language" : "it-CH",
                "value" : "Etacridina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ethacridin"
              },
              {
                "language" : "en-US",
                "value" : "Ethacridine"
              }
            ]
          },
          {
            "code" : "387129004",
            "display" : "Ethambutol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ethambutol"
              },
              {
                "language" : "fr-CH",
                "value" : "éthambutol"
              },
              {
                "language" : "it-CH",
                "value" : "Etambutolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Ethambutol"
              },
              {
                "language" : "en-US",
                "value" : "Ethambutol"
              }
            ]
          },
          {
            "code" : "126097006",
            "display" : "Ethinylestradiol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ethinylestradiol"
              },
              {
                "language" : "fr-CH",
                "value" : "éthinylestradiol"
              },
              {
                "language" : "it-CH",
                "value" : "Etinilestradiolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Ethinylestradiol"
              },
              {
                "language" : "en-US",
                "value" : "Ethinylestradiol"
              }
            ]
          },
          {
            "code" : "32800009",
            "display" : "Ethionamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ethionamid"
              },
              {
                "language" : "fr-CH",
                "value" : "ethionamide"
              },
              {
                "language" : "it-CH",
                "value" : "Etionamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Ethionamid"
              },
              {
                "language" : "en-US",
                "value" : "Ethionamide"
              }
            ]
          },
          {
            "code" : "387244008",
            "display" : "Ethosuximide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ethosuximid"
              },
              {
                "language" : "fr-CH",
                "value" : "éthosuximide"
              },
              {
                "language" : "it-CH",
                "value" : "Etosuccimide"
              },
              {
                "language" : "rm-CH",
                "value" : "Ethosuximid"
              },
              {
                "language" : "en-US",
                "value" : "Ethosuximide"
              }
            ]
          },
          {
            "code" : "22005007",
            "display" : "Ethyl chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chlorethan"
              },
              {
                "language" : "fr-CH",
                "value" : "éthyle chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Cloruro di etile"
              },
              {
                "language" : "rm-CH",
                "value" : "Chlorethan"
              },
              {
                "language" : "en-US",
                "value" : "Ethyl chloride"
              }
            ]
          },
          {
            "code" : "96255000",
            "display" : "Etilefrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etilefrin"
              },
              {
                "language" : "fr-CH",
                "value" : "étiléfrine"
              },
              {
                "language" : "it-CH",
                "value" : "Etilefrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Etilefrin"
              },
              {
                "language" : "en-US",
                "value" : "Etilefrine"
              }
            ]
          },
          {
            "code" : "386860005",
            "display" : "Etodolac (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etodolac"
              },
              {
                "language" : "fr-CH",
                "value" : "étodolac"
              },
              {
                "language" : "it-CH",
                "value" : "Etodolac"
              },
              {
                "language" : "rm-CH",
                "value" : "Etodolac"
              },
              {
                "language" : "en-US",
                "value" : "Etodolac"
              }
            ]
          },
          {
            "code" : "387218008",
            "display" : "Etomidate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etomidat"
              },
              {
                "language" : "fr-CH",
                "value" : "étomidate"
              },
              {
                "language" : "it-CH",
                "value" : "Etomidato"
              },
              {
                "language" : "rm-CH",
                "value" : "Etomidat"
              },
              {
                "language" : "en-US",
                "value" : "Etomidate"
              }
            ]
          },
          {
            "code" : "396050000",
            "display" : "Etonogestrel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etonogestrel"
              },
              {
                "language" : "fr-CH",
                "value" : "étonogestrel"
              },
              {
                "language" : "it-CH",
                "value" : "Etonogestrel"
              },
              {
                "language" : "rm-CH",
                "value" : "Etonogestrel"
              },
              {
                "language" : "en-US",
                "value" : "Etonogestrel"
              }
            ]
          },
          {
            "code" : "387316009",
            "display" : "Etoposide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etoposid"
              },
              {
                "language" : "fr-CH",
                "value" : "étoposide"
              },
              {
                "language" : "it-CH",
                "value" : "Etoposide"
              },
              {
                "language" : "rm-CH",
                "value" : "Etoposid"
              },
              {
                "language" : "en-US",
                "value" : "Etoposide"
              }
            ]
          },
          {
            "code" : "409134009",
            "display" : "Etoricoxib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etoricoxib"
              },
              {
                "language" : "fr-CH",
                "value" : "étoricoxib"
              },
              {
                "language" : "it-CH",
                "value" : "Etoricoxib"
              },
              {
                "language" : "rm-CH",
                "value" : "Etoricoxib"
              },
              {
                "language" : "en-US",
                "value" : "Etoricoxib"
              }
            ]
          },
          {
            "code" : "432121008",
            "display" : "Etravirine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Etravirin"
              },
              {
                "language" : "fr-CH",
                "value" : "étravirine"
              },
              {
                "language" : "it-CH",
                "value" : "Etravirina"
              },
              {
                "language" : "rm-CH",
                "value" : "Etravirin"
              },
              {
                "language" : "en-US",
                "value" : "Etravirine"
              }
            ]
          },
          {
            "code" : "428698007",
            "display" : "Everolimus (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Everolimus"
              },
              {
                "language" : "fr-CH",
                "value" : "évérolimus"
              },
              {
                "language" : "it-CH",
                "value" : "Everolimus"
              },
              {
                "language" : "rm-CH",
                "value" : "Everolimus"
              },
              {
                "language" : "en-US",
                "value" : "Everolimus"
              }
            ]
          },
          {
            "code" : "387017005",
            "display" : "Exemestane (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Exemestan"
              },
              {
                "language" : "fr-CH",
                "value" : "exémestane"
              },
              {
                "language" : "it-CH",
                "value" : "Exemestane"
              },
              {
                "language" : "rm-CH",
                "value" : "Exemestan"
              },
              {
                "language" : "en-US",
                "value" : "Exemestane"
              }
            ]
          },
          {
            "code" : "416859008",
            "display" : "Exenatide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Exenatid"
              },
              {
                "language" : "fr-CH",
                "value" : "exénatide"
              },
              {
                "language" : "it-CH",
                "value" : "Exenatide"
              },
              {
                "language" : "rm-CH",
                "value" : "Exenatid"
              },
              {
                "language" : "en-US",
                "value" : "Exenatide"
              }
            ]
          },
          {
            "code" : "409149001",
            "display" : "Ezetimibe (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ezetimib"
              },
              {
                "language" : "fr-CH",
                "value" : "ézétimibe"
              },
              {
                "language" : "it-CH",
                "value" : "Ezetimibe"
              },
              {
                "language" : "rm-CH",
                "value" : "Ezetimib"
              },
              {
                "language" : "en-US",
                "value" : "Ezetimibe"
              }
            ]
          },
          {
            "code" : "278910002",
            "display" : "Factor VIII (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Blutgerinnungsfaktor VIII human"
              },
              {
                "language" : "fr-CH",
                "value" : "facteur VIII de coagulation humain"
              },
              {
                "language" : "it-CH",
                "value" : "Fattore VIII di coagulazione umano"
              },
              {
                "language" : "rm-CH",
                "value" : "Blutgerinnungsfaktor VIII human"
              },
              {
                "language" : "en-US",
                "value" : "Factor VIII"
              }
            ]
          },
          {
            "code" : "387557001",
            "display" : "Famciclovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Famciclovir"
              },
              {
                "language" : "fr-CH",
                "value" : "famciclovir"
              },
              {
                "language" : "it-CH",
                "value" : "Famciclovir"
              },
              {
                "language" : "rm-CH",
                "value" : "Famciclovir"
              },
              {
                "language" : "en-US",
                "value" : "Famciclovir"
              }
            ]
          },
          {
            "code" : "441743008",
            "display" : "Febuxostat (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Febuxostat"
              },
              {
                "language" : "fr-CH",
                "value" : "fébuxostat"
              },
              {
                "language" : "it-CH",
                "value" : "Febuxostat"
              },
              {
                "language" : "rm-CH",
                "value" : "Febuxostat"
              },
              {
                "language" : "en-US",
                "value" : "Febuxostat"
              }
            ]
          },
          {
            "code" : "96194006",
            "display" : "Felbamate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Felbamat"
              },
              {
                "language" : "fr-CH",
                "value" : "felbamate"
              },
              {
                "language" : "it-CH",
                "value" : "Felbamato"
              },
              {
                "language" : "rm-CH",
                "value" : "Felbamat"
              },
              {
                "language" : "en-US",
                "value" : "Felbamate"
              }
            ]
          },
          {
            "code" : "386863007",
            "display" : "Felodipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Felodipin"
              },
              {
                "language" : "fr-CH",
                "value" : "félodipine"
              },
              {
                "language" : "it-CH",
                "value" : "Felodipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Felodipin"
              },
              {
                "language" : "en-US",
                "value" : "Felodipine"
              }
            ]
          },
          {
            "code" : "386879008",
            "display" : "Fenofibrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fenofibrat"
              },
              {
                "language" : "fr-CH",
                "value" : "fénofibrate"
              },
              {
                "language" : "it-CH",
                "value" : "Fenofibrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Fenofibrat"
              },
              {
                "language" : "en-US",
                "value" : "Fenofibrate"
              }
            ]
          },
          {
            "code" : "395976006",
            "display" : "Fenoterol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fenoterol"
              },
              {
                "language" : "fr-CH",
                "value" : "fénotérol"
              },
              {
                "language" : "it-CH",
                "value" : "Fenoterolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Fenoterol"
              },
              {
                "language" : "en-US",
                "value" : "Fenoterol"
              }
            ]
          },
          {
            "code" : "373492002",
            "display" : "Fentanyl (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fentanyl"
              },
              {
                "language" : "fr-CH",
                "value" : "fentanyl"
              },
              {
                "language" : "it-CH",
                "value" : "Fentanil"
              },
              {
                "language" : "rm-CH",
                "value" : "Fentanyl"
              },
              {
                "language" : "en-US",
                "value" : "Fentanyl"
              }
            ]
          },
          {
            "code" : "406452004",
            "display" : "Ferric hexacyanoferrate-II (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eisen(III)-hexacyanoferrat(II)"
              },
              {
                "language" : "fr-CH",
                "value" : "hexacyanoferrate II ferrique III"
              },
              {
                "language" : "it-CH",
                "value" : "Esacianoferrato (II) di ferro (III)"
              },
              {
                "language" : "rm-CH",
                "value" : "Eisen(III)-hexacyanoferrat(II)"
              },
              {
                "language" : "en-US",
                "value" : "Ferric hexacyanoferrate-II"
              }
            ]
          },
          {
            "code" : "387289009",
            "display" : "Ferrous fumarate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eisen(II) fumarat"
              },
              {
                "language" : "fr-CH",
                "value" : "fer II fumarate"
              },
              {
                "language" : "it-CH",
                "value" : "Ferro (II) fumarato"
              },
              {
                "language" : "rm-CH",
                "value" : "Eisen(II) fumarat"
              },
              {
                "language" : "en-US",
                "value" : "Ferrous fumarate"
              }
            ]
          },
          {
            "code" : "387402000",
            "display" : "Ferrous sulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eisen(II)-sulfat"
              },
              {
                "language" : "fr-CH",
                "value" : "fer sulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Solfato ferroso"
              },
              {
                "language" : "rm-CH",
                "value" : "Eisen(II)-sulfat"
              },
              {
                "language" : "en-US",
                "value" : "Ferrous sulfate"
              }
            ]
          },
          {
            "code" : "441469003",
            "display" : "Fesoterodine fumarate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fesoterodin fumarat"
              },
              {
                "language" : "fr-CH",
                "value" : "fésotérodine fumarate"
              },
              {
                "language" : "it-CH",
                "value" : "Fesoterodine fumarato"
              },
              {
                "language" : "rm-CH",
                "value" : "Fesoterodin fumarat"
              },
              {
                "language" : "en-US",
                "value" : "Fesoterodine fumarate"
              }
            ]
          },
          {
            "code" : "372522002",
            "display" : "Fexofenadine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fexofenadin"
              },
              {
                "language" : "fr-CH",
                "value" : "fexofénadine"
              },
              {
                "language" : "it-CH",
                "value" : "Fexofenadina"
              },
              {
                "language" : "rm-CH",
                "value" : "Fexofenadin"
              },
              {
                "language" : "en-US",
                "value" : "Fexofenadine"
              }
            ]
          },
          {
            "code" : "703664004",
            "display" : "Fidaxomicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fidaxomicin"
              },
              {
                "language" : "fr-CH",
                "value" : "fidaxomicine"
              },
              {
                "language" : "it-CH",
                "value" : "Fidaxomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Fidaxomicin"
              },
              {
                "language" : "en-US",
                "value" : "Fidaxomicin"
              }
            ]
          },
          {
            "code" : "386948008",
            "display" : "Filgrastim (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Filgrastim rekombiniert"
              },
              {
                "language" : "fr-CH",
                "value" : "filgrastim recombinant"
              },
              {
                "language" : "it-CH",
                "value" : "Filgrastim"
              },
              {
                "language" : "rm-CH",
                "value" : "Filgrastim rekombiniert"
              },
              {
                "language" : "en-US",
                "value" : "Filgrastim"
              }
            ]
          },
          {
            "code" : "386963006",
            "display" : "Finasteride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Finasterid"
              },
              {
                "language" : "fr-CH",
                "value" : "finastéride"
              },
              {
                "language" : "it-CH",
                "value" : "Finasteride"
              },
              {
                "language" : "rm-CH",
                "value" : "Finasterid"
              },
              {
                "language" : "en-US",
                "value" : "Finasteride"
              }
            ]
          },
          {
            "code" : "449000008",
            "display" : "Fingolimod (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fingolimod"
              },
              {
                "language" : "fr-CH",
                "value" : "fingolimod"
              },
              {
                "language" : "it-CH",
                "value" : "Fingolimod"
              },
              {
                "language" : "rm-CH",
                "value" : "Fingolimod"
              },
              {
                "language" : "en-US",
                "value" : "Fingolimod"
              }
            ]
          },
          {
            "code" : "735341005",
            "display" : "Fish oil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fischkörperöl"
              },
              {
                "language" : "fr-CH",
                "value" : "poisson huile"
              },
              {
                "language" : "it-CH",
                "value" : "Pesce olio"
              },
              {
                "language" : "rm-CH",
                "value" : "Fischkörperöl"
              },
              {
                "language" : "en-US",
                "value" : "Fish oil"
              }
            ]
          },
          {
            "code" : "372768002",
            "display" : "Flavoxate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flavoxat"
              },
              {
                "language" : "fr-CH",
                "value" : "flavoxate"
              },
              {
                "language" : "it-CH",
                "value" : "Flavossato"
              },
              {
                "language" : "rm-CH",
                "value" : "Flavoxat"
              },
              {
                "language" : "en-US",
                "value" : "Flavoxate"
              }
            ]
          },
          {
            "code" : "372751001",
            "display" : "Flecainide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flecainid"
              },
              {
                "language" : "fr-CH",
                "value" : "flécaïnide"
              },
              {
                "language" : "it-CH",
                "value" : "Flecainide"
              },
              {
                "language" : "rm-CH",
                "value" : "Flecainid"
              },
              {
                "language" : "en-US",
                "value" : "Flecainide"
              }
            ]
          },
          {
            "code" : "387544009",
            "display" : "Flucloxacillin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flucloxacillin"
              },
              {
                "language" : "fr-CH",
                "value" : "flucloxacilline"
              },
              {
                "language" : "it-CH",
                "value" : "Flucloxacillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Flucloxacillin"
              },
              {
                "language" : "en-US",
                "value" : "Flucloxacillin"
              }
            ]
          },
          {
            "code" : "387174006",
            "display" : "Fluconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "fluconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Fluconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluconazol"
              },
              {
                "language" : "en-US",
                "value" : "Fluconazole"
              }
            ]
          },
          {
            "code" : "386907005",
            "display" : "Fludarabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fludarabin"
              },
              {
                "language" : "fr-CH",
                "value" : "fludarabine"
              },
              {
                "language" : "it-CH",
                "value" : "Fludarabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Fludarabin"
              },
              {
                "language" : "en-US",
                "value" : "Fludarabine"
              }
            ]
          },
          {
            "code" : "116586002",
            "display" : "Fludrocortisone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fludrocortison"
              },
              {
                "language" : "fr-CH",
                "value" : "fludrocortisone"
              },
              {
                "language" : "it-CH",
                "value" : "Fludrocortisone"
              },
              {
                "language" : "rm-CH",
                "value" : "Fludrocortison"
              },
              {
                "language" : "en-US",
                "value" : "Fludrocortisone"
              }
            ]
          },
          {
            "code" : "387575000",
            "display" : "Flumazenil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flumazenil"
              },
              {
                "language" : "fr-CH",
                "value" : "flumazénil"
              },
              {
                "language" : "it-CH",
                "value" : "Flumazenil"
              },
              {
                "language" : "rm-CH",
                "value" : "Flumazenil"
              },
              {
                "language" : "en-US",
                "value" : "Flumazenil"
              }
            ]
          },
          {
            "code" : "116598007",
            "display" : "Flumetasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flumetason"
              },
              {
                "language" : "fr-CH",
                "value" : "flumétasone"
              },
              {
                "language" : "it-CH",
                "value" : "Flumetasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Flumetason"
              },
              {
                "language" : "en-US",
                "value" : "Flumetasone"
              }
            ]
          },
          {
            "code" : "418221001",
            "display" : "Flunarizine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flunarizin"
              },
              {
                "language" : "fr-CH",
                "value" : "flunarizine"
              },
              {
                "language" : "it-CH",
                "value" : "Flunarizina"
              },
              {
                "language" : "rm-CH",
                "value" : "Flunarizin"
              },
              {
                "language" : "en-US",
                "value" : "Flunarizine"
              }
            ]
          },
          {
            "code" : "387573007",
            "display" : "Flunitrazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flunitrazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "flunitrazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Flunitrazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Flunitrazepam"
              },
              {
                "language" : "en-US",
                "value" : "Flunitrazepam"
              }
            ]
          },
          {
            "code" : "396060009",
            "display" : "Fluocinonide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluocinonid"
              },
              {
                "language" : "fr-CH",
                "value" : "fluocinonide"
              },
              {
                "language" : "it-CH",
                "value" : "Fluocinonide"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluocinonid"
              },
              {
                "language" : "en-US",
                "value" : "Fluocinonide"
              }
            ]
          },
          {
            "code" : "2925007",
            "display" : "Fluorometholone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluorometholon"
              },
              {
                "language" : "fr-CH",
                "value" : "fluorométholone"
              },
              {
                "language" : "it-CH",
                "value" : "Fluorometolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluorometholon"
              },
              {
                "language" : "en-US",
                "value" : "Fluorometholone"
              }
            ]
          },
          {
            "code" : "387172005",
            "display" : "Fluorouracil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluorouracil"
              },
              {
                "language" : "fr-CH",
                "value" : "fluorouracil"
              },
              {
                "language" : "it-CH",
                "value" : "Fluorouracile"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluorouracil"
              },
              {
                "language" : "en-US",
                "value" : "Fluorouracil"
              }
            ]
          },
          {
            "code" : "372767007",
            "display" : "Fluoxetine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluoxetin"
              },
              {
                "language" : "fr-CH",
                "value" : "fluoxétine"
              },
              {
                "language" : "it-CH",
                "value" : "Fluoxetina"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluoxetin"
              },
              {
                "language" : "en-US",
                "value" : "Fluoxetine"
              }
            ]
          },
          {
            "code" : "387567006",
            "display" : "Flupentixol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flupentixol"
              },
              {
                "language" : "fr-CH",
                "value" : "flupentixol"
              },
              {
                "language" : "it-CH",
                "value" : "Flupentixolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Flupentixol"
              },
              {
                "language" : "en-US",
                "value" : "Flupentixol"
              }
            ]
          },
          {
            "code" : "396062001",
            "display" : "Flupentixol decanoate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flupentixol decanoat"
              },
              {
                "language" : "fr-CH",
                "value" : "flupentixol décanoate"
              },
              {
                "language" : "it-CH",
                "value" : "Flupentixolo decanoato"
              },
              {
                "language" : "rm-CH",
                "value" : "Flupentixol decanoat"
              },
              {
                "language" : "en-US",
                "value" : "Flupentixol decanoate"
              }
            ]
          },
          {
            "code" : "387109000",
            "display" : "Flurazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flurazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "flurazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Flurazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Flurazepam"
              },
              {
                "language" : "en-US",
                "value" : "Flurazepam"
              }
            ]
          },
          {
            "code" : "373506008",
            "display" : "Flurbiprofen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flurbiprofen"
              },
              {
                "language" : "fr-CH",
                "value" : "flurbiprofène"
              },
              {
                "language" : "it-CH",
                "value" : "Flurbiprofene"
              },
              {
                "language" : "rm-CH",
                "value" : "Flurbiprofen"
              },
              {
                "language" : "en-US",
                "value" : "Flurbiprofen"
              }
            ]
          },
          {
            "code" : "397192001",
            "display" : "Fluticasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluticason"
              },
              {
                "language" : "fr-CH",
                "value" : "fluticasone"
              },
              {
                "language" : "it-CH",
                "value" : "Fluticasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluticason"
              },
              {
                "language" : "en-US",
                "value" : "Fluticasone"
              }
            ]
          },
          {
            "code" : "387585004",
            "display" : "Fluvastatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluvastatin"
              },
              {
                "language" : "fr-CH",
                "value" : "fluvastatine"
              },
              {
                "language" : "it-CH",
                "value" : "Fluvastatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluvastatin"
              },
              {
                "language" : "en-US",
                "value" : "Fluvastatin"
              }
            ]
          },
          {
            "code" : "372905008",
            "display" : "Fluvoxamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fluvoxamin"
              },
              {
                "language" : "fr-CH",
                "value" : "fluvoxamine"
              },
              {
                "language" : "it-CH",
                "value" : "Fluvoxamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Fluvoxamin"
              },
              {
                "language" : "en-US",
                "value" : "Fluvoxamine"
              }
            ]
          },
          {
            "code" : "63718003",
            "display" : "Folic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Folsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide folique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido folico"
              },
              {
                "language" : "rm-CH",
                "value" : "Folsäure"
              },
              {
                "language" : "en-US",
                "value" : "Folic acid"
              }
            ]
          },
          {
            "code" : "396065004",
            "display" : "Folinic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Folinsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide folinique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido folinico"
              },
              {
                "language" : "rm-CH",
                "value" : "Folinsäure"
              },
              {
                "language" : "en-US",
                "value" : "Folinic acid"
              }
            ]
          },
          {
            "code" : "395862009",
            "display" : "Follitropin alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Follitropin alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "follitropine alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Follitropina alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Follitropin alfa"
              },
              {
                "language" : "en-US",
                "value" : "Follitropin alfa"
              }
            ]
          },
          {
            "code" : "103028007",
            "display" : "Follitropin beta (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Follitropin beta"
              },
              {
                "language" : "fr-CH",
                "value" : "follitropine bêta"
              },
              {
                "language" : "it-CH",
                "value" : "Follitropina beta"
              },
              {
                "language" : "rm-CH",
                "value" : "Follitropin beta"
              },
              {
                "language" : "en-US",
                "value" : "Follitropin beta"
              }
            ]
          },
          {
            "code" : "386970006",
            "display" : "Fomepizole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fomepizol"
              },
              {
                "language" : "fr-CH",
                "value" : "fomépizole"
              },
              {
                "language" : "it-CH",
                "value" : "Fomepizolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Fomepizol"
              },
              {
                "language" : "en-US",
                "value" : "Fomepizole"
              }
            ]
          },
          {
            "code" : "385517000",
            "display" : "Fondaparinux sodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fondaparinux natrium"
              },
              {
                "language" : "fr-CH",
                "value" : "fondaparinux sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Fondaparinux sodico"
              },
              {
                "language" : "rm-CH",
                "value" : "Fondaparinux natrium"
              },
              {
                "language" : "en-US",
                "value" : "Fondaparinux sodium"
              }
            ]
          },
          {
            "code" : "414289007",
            "display" : "Formoterol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Formoterol"
              },
              {
                "language" : "fr-CH",
                "value" : "formotérol"
              },
              {
                "language" : "it-CH",
                "value" : "Formoterolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Formoterol"
              },
              {
                "language" : "en-US",
                "value" : "Formoterol"
              }
            ]
          },
          {
            "code" : "407017006",
            "display" : "Fosamprenavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fosamprenavir"
              },
              {
                "language" : "fr-CH",
                "value" : "fosamprénavir"
              },
              {
                "language" : "it-CH",
                "value" : "Fosamprenavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Fosamprenavir"
              },
              {
                "language" : "en-US",
                "value" : "Fosamprenavir"
              }
            ]
          },
          {
            "code" : "372902006",
            "display" : "Foscarnet (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Foscarnet"
              },
              {
                "language" : "fr-CH",
                "value" : "foscarnet"
              },
              {
                "language" : "it-CH",
                "value" : "Foscarnet"
              },
              {
                "language" : "rm-CH",
                "value" : "Foscarnet"
              },
              {
                "language" : "en-US",
                "value" : "Foscarnet"
              }
            ]
          },
          {
            "code" : "372534005",
            "display" : "Fosfomycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fosfomycin"
              },
              {
                "language" : "fr-CH",
                "value" : "fosfomycine"
              },
              {
                "language" : "it-CH",
                "value" : "Fosfomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Fosfomycin"
              },
              {
                "language" : "en-US",
                "value" : "Fosfomycin"
              }
            ]
          },
          {
            "code" : "372510000",
            "display" : "Fosinopril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fosinopril"
              },
              {
                "language" : "fr-CH",
                "value" : "fosinopril"
              },
              {
                "language" : "it-CH",
                "value" : "Fosinopril"
              },
              {
                "language" : "rm-CH",
                "value" : "Fosinopril"
              },
              {
                "language" : "en-US",
                "value" : "Fosinopril"
              }
            ]
          },
          {
            "code" : "411990007",
            "display" : "Frovatriptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Frovatriptan"
              },
              {
                "language" : "fr-CH",
                "value" : "frovatriptan"
              },
              {
                "language" : "it-CH",
                "value" : "Frovatriptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Frovatriptan"
              },
              {
                "language" : "en-US",
                "value" : "Frovatriptan"
              }
            ]
          },
          {
            "code" : "130663004",
            "display" : "Fruit bromelain (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bromelain"
              },
              {
                "language" : "fr-CH",
                "value" : "bromélaïnes"
              },
              {
                "language" : "it-CH",
                "value" : "Bromelina"
              },
              {
                "language" : "rm-CH",
                "value" : "Bromelain"
              },
              {
                "language" : "en-US",
                "value" : "Fruit bromelain"
              }
            ]
          },
          {
            "code" : "385519002",
            "display" : "Fulvestrant (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fulvestrant"
              },
              {
                "language" : "fr-CH",
                "value" : "fulvestrant"
              },
              {
                "language" : "it-CH",
                "value" : "Fulvestrant"
              },
              {
                "language" : "rm-CH",
                "value" : "Fulvestrant"
              },
              {
                "language" : "en-US",
                "value" : "Fulvestrant"
              }
            ]
          },
          {
            "code" : "387475002",
            "display" : "Furosemide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Furosemid"
              },
              {
                "language" : "fr-CH",
                "value" : "furosémide"
              },
              {
                "language" : "it-CH",
                "value" : "Furosemide"
              },
              {
                "language" : "rm-CH",
                "value" : "Furosemid"
              },
              {
                "language" : "en-US",
                "value" : "Furosemide"
              }
            ]
          },
          {
            "code" : "387530003",
            "display" : "Fusidic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fusidinsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide fusidique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido fusidico"
              },
              {
                "language" : "rm-CH",
                "value" : "Fusidinsäure"
              },
              {
                "language" : "en-US",
                "value" : "Fusidic acid"
              }
            ]
          },
          {
            "code" : "386845007",
            "display" : "Gabapentin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gabapentin"
              },
              {
                "language" : "fr-CH",
                "value" : "gabapentine"
              },
              {
                "language" : "it-CH",
                "value" : "Gabapentin"
              },
              {
                "language" : "rm-CH",
                "value" : "Gabapentin"
              },
              {
                "language" : "en-US",
                "value" : "Gabapentin"
              }
            ]
          },
          {
            "code" : "418351005",
            "display" : "Gadobutrol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gadobutrol"
              },
              {
                "language" : "fr-CH",
                "value" : "gadobutrol"
              },
              {
                "language" : "it-CH",
                "value" : "Gadobutrolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Gadobutrol"
              },
              {
                "language" : "en-US",
                "value" : "Gadobutrol"
              }
            ]
          },
          {
            "code" : "710812003",
            "display" : "Gadoteric acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gadotersäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide gadotérique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido gadoterico"
              },
              {
                "language" : "rm-CH",
                "value" : "Gadotersäure"
              },
              {
                "language" : "en-US",
                "value" : "Gadoteric acid"
              }
            ]
          },
          {
            "code" : "38182007",
            "display" : "Galactose (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Galactose"
              },
              {
                "language" : "fr-CH",
                "value" : "galactose"
              },
              {
                "language" : "it-CH",
                "value" : "Galattosio"
              },
              {
                "language" : "rm-CH",
                "value" : "Galactose"
              },
              {
                "language" : "en-US",
                "value" : "Galactose"
              }
            ]
          },
          {
            "code" : "395727007",
            "display" : "Galantamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Galantamin"
              },
              {
                "language" : "fr-CH",
                "value" : "galantamine"
              },
              {
                "language" : "it-CH",
                "value" : "Galantamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Galantamin"
              },
              {
                "language" : "en-US",
                "value" : "Galantamine"
              }
            ]
          },
          {
            "code" : "372848001",
            "display" : "Ganciclovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ganciclovir"
              },
              {
                "language" : "fr-CH",
                "value" : "ganciclovir"
              },
              {
                "language" : "it-CH",
                "value" : "Ganciclovir"
              },
              {
                "language" : "rm-CH",
                "value" : "Ganciclovir"
              },
              {
                "language" : "en-US",
                "value" : "Ganciclovir"
              }
            ]
          },
          {
            "code" : "395728002",
            "display" : "Ganirelix (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ganirelix"
              },
              {
                "language" : "fr-CH",
                "value" : "ganirélix"
              },
              {
                "language" : "it-CH",
                "value" : "Ganirelix"
              },
              {
                "language" : "rm-CH",
                "value" : "Ganirelix"
              },
              {
                "language" : "en-US",
                "value" : "Ganirelix"
              }
            ]
          },
          {
            "code" : "386920008",
            "display" : "Gemcitabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gemcitabin"
              },
              {
                "language" : "fr-CH",
                "value" : "gemcitabine"
              },
              {
                "language" : "it-CH",
                "value" : "Gemcitabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Gemcitabin"
              },
              {
                "language" : "en-US",
                "value" : "Gemcitabine"
              }
            ]
          },
          {
            "code" : "387189002",
            "display" : "Gemfibrozil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gemfibrozil"
              },
              {
                "language" : "fr-CH",
                "value" : "gemfibrozil"
              },
              {
                "language" : "it-CH",
                "value" : "Gemfibrozil"
              },
              {
                "language" : "rm-CH",
                "value" : "Gemfibrozil"
              },
              {
                "language" : "en-US",
                "value" : "Gemfibrozil"
              }
            ]
          },
          {
            "code" : "387321007",
            "display" : "Gentamicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gentamicin"
              },
              {
                "language" : "fr-CH",
                "value" : "gentamicine"
              },
              {
                "language" : "it-CH",
                "value" : "Gentamicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Gentamicin"
              },
              {
                "language" : "en-US",
                "value" : "Gentamicin"
              }
            ]
          },
          {
            "code" : "395945000",
            "display" : "Gestodene (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gestoden"
              },
              {
                "language" : "fr-CH",
                "value" : "gestodène"
              },
              {
                "language" : "it-CH",
                "value" : "Gestodene"
              },
              {
                "language" : "rm-CH",
                "value" : "Gestoden"
              },
              {
                "language" : "en-US",
                "value" : "Gestodene"
              }
            ]
          },
          {
            "code" : "420733007",
            "display" : "Ginkgo biloba (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ginkgo (Ginkgo biloba L.)"
              },
              {
                "language" : "fr-CH",
                "value" : "ginkgo (Ginkgo biloba L.)"
              },
              {
                "language" : "it-CH",
                "value" : "Ginko (Ginko biloba L.)"
              },
              {
                "language" : "rm-CH",
                "value" : "Ginkgo (Ginkgo biloba L.)"
              },
              {
                "language" : "en-US",
                "value" : "Ginkgo biloba"
              }
            ]
          },
          {
            "code" : "372535006",
            "display" : "Glatiramer (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glatiramer"
              },
              {
                "language" : "fr-CH",
                "value" : "glatiramère"
              },
              {
                "language" : "it-CH",
                "value" : "Glatiramer"
              },
              {
                "language" : "rm-CH",
                "value" : "Glatiramer"
              },
              {
                "language" : "en-US",
                "value" : "Glatiramer"
              }
            ]
          },
          {
            "code" : "384978002",
            "display" : "Glibenclamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glibenclamid"
              },
              {
                "language" : "fr-CH",
                "value" : "glibenclamide"
              },
              {
                "language" : "it-CH",
                "value" : "Glibenclamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Glibenclamid"
              },
              {
                "language" : "en-US",
                "value" : "Glibenclamide"
              }
            ]
          },
          {
            "code" : "395731001",
            "display" : "Gliclazide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gliclazid"
              },
              {
                "language" : "fr-CH",
                "value" : "gliclazide"
              },
              {
                "language" : "it-CH",
                "value" : "Gliclazide"
              },
              {
                "language" : "rm-CH",
                "value" : "Gliclazid"
              },
              {
                "language" : "en-US",
                "value" : "Gliclazide"
              }
            ]
          },
          {
            "code" : "386966003",
            "display" : "Glimepiride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glimepirid"
              },
              {
                "language" : "fr-CH",
                "value" : "glimépiride"
              },
              {
                "language" : "it-CH",
                "value" : "Glimepiride"
              },
              {
                "language" : "rm-CH",
                "value" : "Glimepirid"
              },
              {
                "language" : "en-US",
                "value" : "Glimepiride"
              }
            ]
          },
          {
            "code" : "66603002",
            "display" : "Glucagon (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glucagon"
              },
              {
                "language" : "fr-CH",
                "value" : "glucagon"
              },
              {
                "language" : "it-CH",
                "value" : "Glucagone"
              },
              {
                "language" : "rm-CH",
                "value" : "Glucagon"
              },
              {
                "language" : "en-US",
                "value" : "Glucagon"
              }
            ]
          },
          {
            "code" : "67079006",
            "display" : "Glucose (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glucose"
              },
              {
                "language" : "fr-CH",
                "value" : "glucose"
              },
              {
                "language" : "it-CH",
                "value" : "Glucosio"
              },
              {
                "language" : "rm-CH",
                "value" : "Glucose"
              },
              {
                "language" : "en-US",
                "value" : "Glucose"
              }
            ]
          },
          {
            "code" : "387404004",
            "display" : "Glyceryl trinitrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nitroglycerin"
              },
              {
                "language" : "fr-CH",
                "value" : "nitroglycérine"
              },
              {
                "language" : "it-CH",
                "value" : "Nitroglicerina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nitroglycerin"
              },
              {
                "language" : "en-US",
                "value" : "Glyceryl trinitrate"
              }
            ]
          },
          {
            "code" : "15331006",
            "display" : "Glycine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glycin"
              },
              {
                "language" : "fr-CH",
                "value" : "glycine"
              },
              {
                "language" : "it-CH",
                "value" : "Glicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Glycin"
              },
              {
                "language" : "en-US",
                "value" : "Glycine"
              }
            ]
          },
          {
            "code" : "96314001",
            "display" : "Glycocholic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glycocholsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide glycocholique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido glicocolico"
              },
              {
                "language" : "rm-CH",
                "value" : "Glycocholsäure"
              },
              {
                "language" : "en-US",
                "value" : "Glycocholic acid"
              }
            ]
          },
          {
            "code" : "769097000",
            "display" : "Glycopyrronium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Glycopyrronium-Kation"
              },
              {
                "language" : "fr-CH",
                "value" : "glycopyrronium"
              },
              {
                "language" : "it-CH",
                "value" : "Glicopirronio"
              },
              {
                "language" : "rm-CH",
                "value" : "Glycopyrronium-Kation"
              },
              {
                "language" : "en-US",
                "value" : "Glycopyrronium"
              }
            ]
          },
          {
            "code" : "442435002",
            "display" : "Golimumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Golimumab"
              },
              {
                "language" : "fr-CH",
                "value" : "golimumab"
              },
              {
                "language" : "it-CH",
                "value" : "Golimumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Golimumab"
              },
              {
                "language" : "en-US",
                "value" : "Golimumab"
              }
            ]
          },
          {
            "code" : "397197007",
            "display" : "Gonadorelin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gonadorelin"
              },
              {
                "language" : "fr-CH",
                "value" : "gonadoréline"
              },
              {
                "language" : "it-CH",
                "value" : "Gonadorelina"
              },
              {
                "language" : "rm-CH",
                "value" : "Gonadorelin"
              },
              {
                "language" : "en-US",
                "value" : "Gonadorelin"
              }
            ]
          },
          {
            "code" : "108771008",
            "display" : "Goserelin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Goserelin"
              },
              {
                "language" : "fr-CH",
                "value" : "goséréline"
              },
              {
                "language" : "it-CH",
                "value" : "Goserelin"
              },
              {
                "language" : "rm-CH",
                "value" : "Goserelin"
              },
              {
                "language" : "en-US",
                "value" : "Goserelin"
              }
            ]
          },
          {
            "code" : "387524003",
            "display" : "Gramicidin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gramicidin"
              },
              {
                "language" : "fr-CH",
                "value" : "gramicidine"
              },
              {
                "language" : "it-CH",
                "value" : "Gramicidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Gramicidin"
              },
              {
                "language" : "en-US",
                "value" : "Gramicidin"
              }
            ]
          },
          {
            "code" : "372489005",
            "display" : "Granisetron (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Granisetron"
              },
              {
                "language" : "fr-CH",
                "value" : "granisétron"
              },
              {
                "language" : "it-CH",
                "value" : "Granisetron"
              },
              {
                "language" : "rm-CH",
                "value" : "Granisetron"
              },
              {
                "language" : "en-US",
                "value" : "Granisetron"
              }
            ]
          },
          {
            "code" : "87174009",
            "display" : "Guaifenesin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Guaifenesin"
              },
              {
                "language" : "fr-CH",
                "value" : "guaïfénésine"
              },
              {
                "language" : "it-CH",
                "value" : "Guaifenesina"
              },
              {
                "language" : "rm-CH",
                "value" : "Guaifenesin"
              },
              {
                "language" : "en-US",
                "value" : "Guaifenesin"
              }
            ]
          },
          {
            "code" : "372507007",
            "display" : "Guanfacine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Guanfacin"
              },
              {
                "language" : "fr-CH",
                "value" : "guanfacine"
              },
              {
                "language" : "it-CH",
                "value" : "Guanfacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Guanfacin"
              },
              {
                "language" : "en-US",
                "value" : "Guanfacine"
              }
            ]
          },
          {
            "code" : "395735005",
            "display" : "Halcinonide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Halcinonid"
              },
              {
                "language" : "fr-CH",
                "value" : "halcinonide"
              },
              {
                "language" : "it-CH",
                "value" : "Alcinonide"
              },
              {
                "language" : "rm-CH",
                "value" : "Halcinonid"
              },
              {
                "language" : "en-US",
                "value" : "Halcinonide"
              }
            ]
          },
          {
            "code" : "704673003",
            "display" : "Halometasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Halometason"
              },
              {
                "language" : "fr-CH",
                "value" : "halométasone"
              },
              {
                "language" : "it-CH",
                "value" : "Alometasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Halometason"
              },
              {
                "language" : "en-US",
                "value" : "Halometasone"
              }
            ]
          },
          {
            "code" : "386837002",
            "display" : "Haloperidol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Haloperidol"
              },
              {
                "language" : "fr-CH",
                "value" : "halopéridol"
              },
              {
                "language" : "it-CH",
                "value" : "Aloperidolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Haloperidol"
              },
              {
                "language" : "en-US",
                "value" : "Haloperidol"
              }
            ]
          },
          {
            "code" : "372877000",
            "display" : "Heparin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Heparin"
              },
              {
                "language" : "fr-CH",
                "value" : "héparine"
              },
              {
                "language" : "it-CH",
                "value" : "Eparina"
              },
              {
                "language" : "rm-CH",
                "value" : "Heparin"
              },
              {
                "language" : "en-US",
                "value" : "Heparin"
              }
            ]
          },
          {
            "code" : "303233001",
            "display" : "Hepatitis B antigen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hepatitis B Antigen"
              },
              {
                "language" : "fr-CH",
                "value" : "hepatitis B antigène"
              },
              {
                "language" : "it-CH",
                "value" : "Epatite B antigene purificato"
              },
              {
                "language" : "rm-CH",
                "value" : "Hepatitis B Antigen"
              },
              {
                "language" : "en-US",
                "value" : "Hepatitis B antigen"
              }
            ]
          },
          {
            "code" : "703831002",
            "display" : "Hexamidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hexamidin"
              },
              {
                "language" : "fr-CH",
                "value" : "hexamidine"
              },
              {
                "language" : "it-CH",
                "value" : "Esamidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Hexamidin"
              },
              {
                "language" : "en-US",
                "value" : "Hexamidine"
              }
            ]
          },
          {
            "code" : "387132001",
            "display" : "Hexetidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hexetidin"
              },
              {
                "language" : "fr-CH",
                "value" : "hexétidine"
              },
              {
                "language" : "it-CH",
                "value" : "Esetidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Hexetidin"
              },
              {
                "language" : "en-US",
                "value" : "Hexetidine"
              }
            ]
          },
          {
            "code" : "704987001",
            "display" : "Hexoprenaline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hexoprenalin"
              },
              {
                "language" : "fr-CH",
                "value" : "hexoprénaline"
              },
              {
                "language" : "it-CH",
                "value" : "Esoprenalina"
              },
              {
                "language" : "rm-CH",
                "value" : "Hexoprenalin"
              },
              {
                "language" : "en-US",
                "value" : "Hexoprenaline"
              }
            ]
          },
          {
            "code" : "60260004",
            "display" : "Histidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Histidin"
              },
              {
                "language" : "fr-CH",
                "value" : "histidine"
              },
              {
                "language" : "it-CH",
                "value" : "Istidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Histidin"
              },
              {
                "language" : "en-US",
                "value" : "Histidine"
              }
            ]
          },
          {
            "code" : "769102002",
            "display" : "Human anti-D immunoglobulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anti-D-Immunglobulin vom Menschen"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline humaine anti-D"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina umana anti-D"
              },
              {
                "language" : "rm-CH",
                "value" : "Anti-D-Immunglobulin vom Menschen"
              },
              {
                "language" : "en-US",
                "value" : "Human anti-D immunoglobulin"
              }
            ]
          },
          {
            "code" : "412564003",
            "display" : "Human antithrombin III (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antithrombin III human"
              },
              {
                "language" : "fr-CH",
                "value" : "antithrombine III humaine"
              },
              {
                "language" : "it-CH",
                "value" : "Antitrombina III umana"
              },
              {
                "language" : "rm-CH",
                "value" : "Antithrombin III human"
              },
              {
                "language" : "en-US",
                "value" : "Human antithrombin III"
              }
            ]
          },
          {
            "code" : "59433001",
            "display" : "Human chorionic gonadotropin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Choriongonadotropin"
              },
              {
                "language" : "fr-CH",
                "value" : "gonadotrophine chorionique"
              },
              {
                "language" : "it-CH",
                "value" : "Gonadotropina corionica umana (HCG)"
              },
              {
                "language" : "rm-CH",
                "value" : "Choriongonadotropin"
              },
              {
                "language" : "en-US",
                "value" : "Human chorionic gonadotropin"
              }
            ]
          },
          {
            "code" : "418326009",
            "display" : "Human fibrinogen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Fibrinogen (human)"
              },
              {
                "language" : "fr-CH",
                "value" : "fibrinogène humain"
              },
              {
                "language" : "it-CH",
                "value" : "Fibrinogeno umano"
              },
              {
                "language" : "rm-CH",
                "value" : "Fibrinogen (human)"
              },
              {
                "language" : "en-US",
                "value" : "Human fibrinogen"
              }
            ]
          },
          {
            "code" : "420084002",
            "display" : "Human immunoglobulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunglobulin vom Menschen"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline humaine"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina umana"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunglobulin vom Menschen"
              },
              {
                "language" : "en-US",
                "value" : "Human immunoglobulin"
              }
            ]
          },
          {
            "code" : "722197004",
            "display" : "Human immunoglobulin G (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunglobulin G human (IgG)"
              },
              {
                "language" : "fr-CH",
                "value" : "iImmunoglobulinum gamma humanum (IgG)"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina G umana (IgG)"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunglobulin G human (IgG)"
              },
              {
                "language" : "en-US",
                "value" : "Human immunoglobulin G"
              }
            ]
          },
          {
            "code" : "96367001",
            "display" : "Human insulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insulin human"
              },
              {
                "language" : "fr-CH",
                "value" : "insulines humaines"
              },
              {
                "language" : "it-CH",
                "value" : "Insulina umana"
              },
              {
                "language" : "rm-CH",
                "value" : "Insulin human"
              },
              {
                "language" : "en-US",
                "value" : "Human insulin"
              }
            ]
          },
          {
            "code" : "8203003",
            "display" : "Human menopausal gonadotropin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Menotropin"
              },
              {
                "language" : "fr-CH",
                "value" : "ménotropine"
              },
              {
                "language" : "it-CH",
                "value" : "Menotropina"
              },
              {
                "language" : "rm-CH",
                "value" : "Menotropin"
              },
              {
                "language" : "en-US",
                "value" : "Human menopausal gonadotropin"
              }
            ]
          },
          {
            "code" : "38218009",
            "display" : "Hyaluronic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hyaluronsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide hyaluronique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido ialuronico"
              },
              {
                "language" : "rm-CH",
                "value" : "Hyaluronsäure"
              },
              {
                "language" : "en-US",
                "value" : "Hyaluronic acid"
              }
            ]
          },
          {
            "code" : "387525002",
            "display" : "Hydrochlorothiazide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydrochlorothiazid"
              },
              {
                "language" : "fr-CH",
                "value" : "hydrochlorothiazide"
              },
              {
                "language" : "it-CH",
                "value" : "Idrocloratiazide"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydrochlorothiazid"
              },
              {
                "language" : "en-US",
                "value" : "Hydrochlorothiazide"
              }
            ]
          },
          {
            "code" : "372671002",
            "display" : "Hydrocodone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydrocodon"
              },
              {
                "language" : "fr-CH",
                "value" : "hydrocodone"
              },
              {
                "language" : "it-CH",
                "value" : "Idrocodone"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydrocodon"
              },
              {
                "language" : "en-US",
                "value" : "Hydrocodone"
              }
            ]
          },
          {
            "code" : "396458002",
            "display" : "Hydrocortisone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydrocortison"
              },
              {
                "language" : "fr-CH",
                "value" : "hydrocortisone"
              },
              {
                "language" : "it-CH",
                "value" : "Idrocortisone"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydrocortison"
              },
              {
                "language" : "en-US",
                "value" : "Hydrocortisone"
              }
            ]
          },
          {
            "code" : "79380007",
            "display" : "Hydrocortisone acetate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydrocortison acetat"
              },
              {
                "language" : "fr-CH",
                "value" : "hydrocortisone acétate"
              },
              {
                "language" : "it-CH",
                "value" : "Idrocortisone acetato"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydrocortison acetat"
              },
              {
                "language" : "en-US",
                "value" : "Hydrocortisone acetate"
              }
            ]
          },
          {
            "code" : "387171003",
            "display" : "Hydrogen peroxide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Wasserstoffperoxid"
              },
              {
                "language" : "fr-CH",
                "value" : "peroxyde d´hydrogène"
              },
              {
                "language" : "it-CH",
                "value" : "Idrogeno perossido"
              },
              {
                "language" : "rm-CH",
                "value" : "Wasserstoffperoxid"
              },
              {
                "language" : "en-US",
                "value" : "Hydrogen peroxide"
              }
            ]
          },
          {
            "code" : "44508008",
            "display" : "Hydromorphone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydromorphon"
              },
              {
                "language" : "fr-CH",
                "value" : "hydromorphone"
              },
              {
                "language" : "it-CH",
                "value" : "Idromorfone"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydromorphon"
              },
              {
                "language" : "en-US",
                "value" : "Hydromorphone"
              }
            ]
          },
          {
            "code" : "387422001",
            "display" : "Hydroquinone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydrochinon"
              },
              {
                "language" : "fr-CH",
                "value" : "hydroquinone"
              },
              {
                "language" : "it-CH",
                "value" : "Idrochinone"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydrochinon"
              },
              {
                "language" : "en-US",
                "value" : "Hydroquinone"
              }
            ]
          },
          {
            "code" : "395738007",
            "display" : "Hydrotalcite (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydrotalcit"
              },
              {
                "language" : "fr-CH",
                "value" : "hydrotalcite"
              },
              {
                "language" : "it-CH",
                "value" : "Idrotalcite"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydrotalcit"
              },
              {
                "language" : "en-US",
                "value" : "Hydrotalcite"
              }
            ]
          },
          {
            "code" : "409258004",
            "display" : "Hydroxocobalamin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydroxocobalamin"
              },
              {
                "language" : "fr-CH",
                "value" : "hydroxocobalamine"
              },
              {
                "language" : "it-CH",
                "value" : "Idrossocobalamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydroxocobalamin"
              },
              {
                "language" : "en-US",
                "value" : "Hydroxocobalamin"
              }
            ]
          },
          {
            "code" : "387314007",
            "display" : "Hydroxycarbamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydroxycarbamid"
              },
              {
                "language" : "fr-CH",
                "value" : "hydroxycarbamide"
              },
              {
                "language" : "it-CH",
                "value" : "Idrossicarbamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydroxycarbamid"
              },
              {
                "language" : "en-US",
                "value" : "Hydroxycarbamide"
              }
            ]
          },
          {
            "code" : "373540008",
            "display" : "Hydroxychloroquine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydroxychloroquin"
              },
              {
                "language" : "fr-CH",
                "value" : "hydroxychloroquine"
              },
              {
                "language" : "it-CH",
                "value" : "Idrossiclorochina"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydroxychloroquin"
              },
              {
                "language" : "en-US",
                "value" : "Hydroxychloroquine"
              }
            ]
          },
          {
            "code" : "372856003",
            "display" : "Hydroxyzine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hydroxyzin"
              },
              {
                "language" : "fr-CH",
                "value" : "hydroxyzine"
              },
              {
                "language" : "it-CH",
                "value" : "Idrossizina"
              },
              {
                "language" : "rm-CH",
                "value" : "Hydroxyzin"
              },
              {
                "language" : "en-US",
                "value" : "Hydroxyzine"
              }
            ]
          },
          {
            "code" : "123681008",
            "display" : "Hypericin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hypericin"
              },
              {
                "language" : "fr-CH",
                "value" : "hypéricine"
              },
              {
                "language" : "it-CH",
                "value" : "Ipericina"
              },
              {
                "language" : "rm-CH",
                "value" : "Hypericin"
              },
              {
                "language" : "en-US",
                "value" : "Hypericin"
              }
            ]
          },
          {
            "code" : "412515006",
            "display" : "Hypericum perforatum extract (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Johanniskraut (Hypericum perforatum L.)"
              },
              {
                "language" : "fr-CH",
                "value" : "millepertuis (Hypericum perforatum L.)"
              },
              {
                "language" : "it-CH",
                "value" : "Iperico (Hypericum perforatum L.)"
              },
              {
                "language" : "rm-CH",
                "value" : "Johanniskraut (Hypericum perforatum L.)"
              },
              {
                "language" : "en-US",
                "value" : "Hypericum perforatum extract"
              }
            ]
          },
          {
            "code" : "420936009",
            "display" : "Ibandronic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ibandronsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide ibandronique (ibandronate)"
              },
              {
                "language" : "it-CH",
                "value" : "Acido ibandronico"
              },
              {
                "language" : "rm-CH",
                "value" : "Ibandronsäure"
              },
              {
                "language" : "en-US",
                "value" : "Ibandronic acid"
              }
            ]
          },
          {
            "code" : "387207008",
            "display" : "Ibuprofen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ibuprofen"
              },
              {
                "language" : "fr-CH",
                "value" : "ibuprofène"
              },
              {
                "language" : "it-CH",
                "value" : "Ibuprofene"
              },
              {
                "language" : "rm-CH",
                "value" : "Ibuprofen"
              },
              {
                "language" : "en-US",
                "value" : "Ibuprofen"
              }
            ]
          },
          {
            "code" : "425516000",
            "display" : "Ibuprofen lysine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ibuprofen lysin"
              },
              {
                "language" : "fr-CH",
                "value" : "ibuprofène lysine"
              },
              {
                "language" : "it-CH",
                "value" : "Ibuprofene lisina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ibuprofen lysin"
              },
              {
                "language" : "en-US",
                "value" : "Ibuprofen lysine"
              }
            ]
          },
          {
            "code" : "703834005",
            "display" : "Icatibant (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Icatibant"
              },
              {
                "language" : "fr-CH",
                "value" : "icatibant"
              },
              {
                "language" : "it-CH",
                "value" : "Icatibant"
              },
              {
                "language" : "rm-CH",
                "value" : "Icatibant"
              },
              {
                "language" : "en-US",
                "value" : "Icatibant"
              }
            ]
          },
          {
            "code" : "372539000",
            "display" : "Idarubicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Idarubicin"
              },
              {
                "language" : "fr-CH",
                "value" : "idarubicine"
              },
              {
                "language" : "it-CH",
                "value" : "Idarubicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Idarubicin"
              },
              {
                "language" : "en-US",
                "value" : "Idarubicin"
              }
            ]
          },
          {
            "code" : "716017002",
            "display" : "Idarucizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Idarucizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "idarucizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Idarucizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Idarucizumab"
              },
              {
                "language" : "en-US",
                "value" : "Idarucizumab"
              }
            ]
          },
          {
            "code" : "429666007",
            "display" : "Idebenone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Idebenon"
              },
              {
                "language" : "fr-CH",
                "value" : "idébénone"
              },
              {
                "language" : "it-CH",
                "value" : "Idebenone"
              },
              {
                "language" : "rm-CH",
                "value" : "Idebenon"
              },
              {
                "language" : "en-US",
                "value" : "Idebenone"
              }
            ]
          },
          {
            "code" : "710278000",
            "display" : "Idelalisib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Idelalisib"
              },
              {
                "language" : "fr-CH",
                "value" : "idélalisib"
              },
              {
                "language" : "it-CH",
                "value" : "Idelalisib"
              },
              {
                "language" : "rm-CH",
                "value" : "Idelalisib"
              },
              {
                "language" : "en-US",
                "value" : "Idelalisib"
              }
            ]
          },
          {
            "code" : "386904003",
            "display" : "Ifosfamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ifosfamid"
              },
              {
                "language" : "fr-CH",
                "value" : "ifosfamide"
              },
              {
                "language" : "it-CH",
                "value" : "Ifosfamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Ifosfamid"
              },
              {
                "language" : "en-US",
                "value" : "Ifosfamide"
              }
            ]
          },
          {
            "code" : "395740002",
            "display" : "Iloprost (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iloprost"
              },
              {
                "language" : "fr-CH",
                "value" : "iloprost"
              },
              {
                "language" : "it-CH",
                "value" : "Iloprost"
              },
              {
                "language" : "rm-CH",
                "value" : "Iloprost"
              },
              {
                "language" : "en-US",
                "value" : "Iloprost"
              }
            ]
          },
          {
            "code" : "414460008",
            "display" : "Imatinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Imatinib"
              },
              {
                "language" : "fr-CH",
                "value" : "imatinib"
              },
              {
                "language" : "it-CH",
                "value" : "Imatinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Imatinib"
              },
              {
                "language" : "en-US",
                "value" : "Imatinib"
              }
            ]
          },
          {
            "code" : "386968002",
            "display" : "Imiglucerase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Imiglucerase"
              },
              {
                "language" : "fr-CH",
                "value" : "imiglucérase"
              },
              {
                "language" : "it-CH",
                "value" : "Imiglucerasi"
              },
              {
                "language" : "rm-CH",
                "value" : "Imiglucerase"
              },
              {
                "language" : "en-US",
                "value" : "Imiglucerase"
              }
            ]
          },
          {
            "code" : "46558003",
            "display" : "Imipenem (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Imipenem"
              },
              {
                "language" : "fr-CH",
                "value" : "imipénem"
              },
              {
                "language" : "it-CH",
                "value" : "Imipenem"
              },
              {
                "language" : "rm-CH",
                "value" : "Imipenem"
              },
              {
                "language" : "en-US",
                "value" : "Imipenem"
              }
            ]
          },
          {
            "code" : "372718005",
            "display" : "Imipramine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Imipramin"
              },
              {
                "language" : "fr-CH",
                "value" : "imipramine"
              },
              {
                "language" : "it-CH",
                "value" : "Imipramina"
              },
              {
                "language" : "rm-CH",
                "value" : "Imipramin"
              },
              {
                "language" : "en-US",
                "value" : "Imipramine"
              }
            ]
          },
          {
            "code" : "386941002",
            "display" : "Imiquimod (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Imiquimod"
              },
              {
                "language" : "fr-CH",
                "value" : "imiquimod"
              },
              {
                "language" : "it-CH",
                "value" : "Imiquimod"
              },
              {
                "language" : "rm-CH",
                "value" : "Imiquimod"
              },
              {
                "language" : "en-US",
                "value" : "Imiquimod"
              }
            ]
          },
          {
            "code" : "106181007",
            "display" : "Immunologic substance (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunologic substance"
              },
              {
                "language" : "fr-CH",
                "value" : "substance immunologique"
              },
              {
                "language" : "it-CH",
                "value" : "Immunologic substance"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunologic substance"
              },
              {
                "language" : "en-US",
                "value" : "Immunologic substance"
              }
            ]
          },
          {
            "code" : "46046006",
            "display" : "Immunoglobulin A (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunglobulin A human (IgA)"
              },
              {
                "language" : "fr-CH",
                "value" : "immunglobulin A human (IgA)"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina A umana (IgA)"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunglobulin A human (IgA)"
              },
              {
                "language" : "en-US",
                "value" : "Immunoglobulin A"
              }
            ]
          },
          {
            "code" : "74889000",
            "display" : "Immunoglobulin M (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunglobulin M human (IgM)"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline M humaine (IgM)"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina M umana (IgM)"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunglobulin M human (IgM)"
              },
              {
                "language" : "en-US",
                "value" : "Immunoglobulin M"
              }
            ]
          },
          {
            "code" : "702801003",
            "display" : "Indacaterol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Indacaterol"
              },
              {
                "language" : "fr-CH",
                "value" : "indacatérol"
              },
              {
                "language" : "it-CH",
                "value" : "Indacaterol"
              },
              {
                "language" : "rm-CH",
                "value" : "Indacaterol"
              },
              {
                "language" : "en-US",
                "value" : "Indacaterol"
              }
            ]
          },
          {
            "code" : "387419003",
            "display" : "Indapamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Indapamid"
              },
              {
                "language" : "fr-CH",
                "value" : "indapamide"
              },
              {
                "language" : "it-CH",
                "value" : "Indapamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Indapamid"
              },
              {
                "language" : "en-US",
                "value" : "Indapamide"
              }
            ]
          },
          {
            "code" : "373513008",
            "display" : "Indometacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Indometacin"
              },
              {
                "language" : "fr-CH",
                "value" : "indométacine"
              },
              {
                "language" : "it-CH",
                "value" : "Indometacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Indometacin"
              },
              {
                "language" : "en-US",
                "value" : "Indometacin"
              }
            ]
          },
          {
            "code" : "386891004",
            "display" : "Infliximab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infliximab"
              },
              {
                "language" : "fr-CH",
                "value" : "infliximab"
              },
              {
                "language" : "it-CH",
                "value" : "Infliximab"
              },
              {
                "language" : "rm-CH",
                "value" : "Infliximab"
              },
              {
                "language" : "en-US",
                "value" : "Infliximab"
              }
            ]
          },
          {
            "code" : "72164009",
            "display" : "Inositol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Inositol"
              },
              {
                "language" : "fr-CH",
                "value" : "inositol"
              },
              {
                "language" : "it-CH",
                "value" : "Inositolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Inositol"
              },
              {
                "language" : "en-US",
                "value" : "Inositol"
              }
            ]
          },
          {
            "code" : "325072002",
            "display" : "Insulin aspart (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insulin aspart"
              },
              {
                "language" : "fr-CH",
                "value" : "insuline asparte"
              },
              {
                "language" : "it-CH",
                "value" : "Insulina aspartat"
              },
              {
                "language" : "rm-CH",
                "value" : "Insulin aspart"
              },
              {
                "language" : "en-US",
                "value" : "Insulin aspart"
              }
            ]
          },
          {
            "code" : "710281005",
            "display" : "Insulin degludec (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insulin degludec"
              },
              {
                "language" : "fr-CH",
                "value" : "insuline dégludec"
              },
              {
                "language" : "it-CH",
                "value" : "Insulina degludec"
              },
              {
                "language" : "rm-CH",
                "value" : "Insulin degludec"
              },
              {
                "language" : "en-US",
                "value" : "Insulin degludec"
              }
            ]
          },
          {
            "code" : "414515005",
            "display" : "Insulin detemir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insulin detemir"
              },
              {
                "language" : "fr-CH",
                "value" : "insuline détémir"
              },
              {
                "language" : "it-CH",
                "value" : "Insulina detemir"
              },
              {
                "language" : "rm-CH",
                "value" : "Insulin detemir"
              },
              {
                "language" : "en-US",
                "value" : "Insulin detemir"
              }
            ]
          },
          {
            "code" : "411529005",
            "display" : "Insulin glargine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insulin glargin"
              },
              {
                "language" : "fr-CH",
                "value" : "insuline glargine"
              },
              {
                "language" : "it-CH",
                "value" : "Insulina glargine"
              },
              {
                "language" : "rm-CH",
                "value" : "Insulin glargin"
              },
              {
                "language" : "en-US",
                "value" : "Insulin glargine"
              }
            ]
          },
          {
            "code" : "411530000",
            "display" : "Insulin glulisine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insulin glulisin"
              },
              {
                "language" : "fr-CH",
                "value" : "insuline glulisine"
              },
              {
                "language" : "it-CH",
                "value" : "Insulina glulisina"
              },
              {
                "language" : "rm-CH",
                "value" : "Insulin glulisin"
              },
              {
                "language" : "en-US",
                "value" : "Insulin glulisine"
              }
            ]
          },
          {
            "code" : "412210000",
            "display" : "Insulin lispro (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insulin lispro"
              },
              {
                "language" : "fr-CH",
                "value" : "insuline lispro"
              },
              {
                "language" : "it-CH",
                "value" : "Insulina lispro"
              },
              {
                "language" : "rm-CH",
                "value" : "Insulin lispro"
              },
              {
                "language" : "en-US",
                "value" : "Insulin lispro"
              }
            ]
          },
          {
            "code" : "386914007",
            "display" : "Interferon alfa-2a (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Interferon alfa-2a"
              },
              {
                "language" : "fr-CH",
                "value" : "interféron alfa 2a"
              },
              {
                "language" : "it-CH",
                "value" : "Interferone alfa 2a"
              },
              {
                "language" : "rm-CH",
                "value" : "Interferon alfa-2a"
              },
              {
                "language" : "en-US",
                "value" : "Interferon alfa-2a"
              }
            ]
          },
          {
            "code" : "386915008",
            "display" : "Interferon alfa-2b (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Interferon alfa-2b"
              },
              {
                "language" : "fr-CH",
                "value" : "interféron alfa 2b"
              },
              {
                "language" : "it-CH",
                "value" : "Interferone alfa 2b"
              },
              {
                "language" : "rm-CH",
                "value" : "Interferon alfa-2b"
              },
              {
                "language" : "en-US",
                "value" : "Interferon alfa-2b"
              }
            ]
          },
          {
            "code" : "386902004",
            "display" : "Interferon beta-1a (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Interferon beta-1a"
              },
              {
                "language" : "fr-CH",
                "value" : "interféron bêta-1a"
              },
              {
                "language" : "it-CH",
                "value" : "Interferone beta 1a"
              },
              {
                "language" : "rm-CH",
                "value" : "Interferon beta-1a"
              },
              {
                "language" : "en-US",
                "value" : "Interferon beta-1a"
              }
            ]
          },
          {
            "code" : "386903009",
            "display" : "Interferon beta-1b (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Interferon beta-1b"
              },
              {
                "language" : "fr-CH",
                "value" : "interféron bêta 1b"
              },
              {
                "language" : "it-CH",
                "value" : "Interferone beta 1b"
              },
              {
                "language" : "rm-CH",
                "value" : "Interferon beta-1b"
              },
              {
                "language" : "en-US",
                "value" : "Interferon beta-1b"
              }
            ]
          },
          {
            "code" : "386901006",
            "display" : "Interferon gamma-1b (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Interferon gamma-1b"
              },
              {
                "language" : "fr-CH",
                "value" : "interféron gamma 1b"
              },
              {
                "language" : "it-CH",
                "value" : "Interferone gamma 1b"
              },
              {
                "language" : "rm-CH",
                "value" : "Interferon gamma-1b"
              },
              {
                "language" : "en-US",
                "value" : "Interferon gamma-1b"
              }
            ]
          },
          {
            "code" : "32154009",
            "display" : "Inulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Inulin"
              },
              {
                "language" : "fr-CH",
                "value" : "inuline"
              },
              {
                "language" : "it-CH",
                "value" : "Inulina"
              },
              {
                "language" : "rm-CH",
                "value" : "Inulin"
              },
              {
                "language" : "en-US",
                "value" : "Inulin"
              }
            ]
          },
          {
            "code" : "395750001",
            "display" : "Iodixanol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iodixanol"
              },
              {
                "language" : "fr-CH",
                "value" : "iodixanol"
              },
              {
                "language" : "it-CH",
                "value" : "Iodixanolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Iodixanol"
              },
              {
                "language" : "en-US",
                "value" : "Iodixanol"
              }
            ]
          },
          {
            "code" : "395751002",
            "display" : "Iohexol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iohexol"
              },
              {
                "language" : "fr-CH",
                "value" : "iohexol"
              },
              {
                "language" : "it-CH",
                "value" : "Ioexolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Iohexol"
              },
              {
                "language" : "en-US",
                "value" : "Iohexol"
              }
            ]
          },
          {
            "code" : "395754005",
            "display" : "Iopamidol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iopamidol"
              },
              {
                "language" : "fr-CH",
                "value" : "iopamidol"
              },
              {
                "language" : "it-CH",
                "value" : "Iopamidolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Iopamidol"
              },
              {
                "language" : "en-US",
                "value" : "Iopamidol"
              }
            ]
          },
          {
            "code" : "395756007",
            "display" : "Iopromide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Iopromid"
              },
              {
                "language" : "fr-CH",
                "value" : "iopromide"
              },
              {
                "language" : "it-CH",
                "value" : "Iopromide"
              },
              {
                "language" : "rm-CH",
                "value" : "Iopromid"
              },
              {
                "language" : "en-US",
                "value" : "Iopromide"
              }
            ]
          },
          {
            "code" : "697995005",
            "display" : "Ipilimumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ipilimumab"
              },
              {
                "language" : "fr-CH",
                "value" : "ipilimumab"
              },
              {
                "language" : "it-CH",
                "value" : "Ipilimumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Ipilimumab"
              },
              {
                "language" : "en-US",
                "value" : "Ipilimumab"
              }
            ]
          },
          {
            "code" : "372518007",
            "display" : "Ipratropium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ipratropium"
              },
              {
                "language" : "fr-CH",
                "value" : "ipratropium"
              },
              {
                "language" : "it-CH",
                "value" : "Ipratropio"
              },
              {
                "language" : "rm-CH",
                "value" : "Ipratropium"
              },
              {
                "language" : "en-US",
                "value" : "Ipratropium"
              }
            ]
          },
          {
            "code" : "386877005",
            "display" : "Irbesartan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Irbesartan"
              },
              {
                "language" : "fr-CH",
                "value" : "irbésartan"
              },
              {
                "language" : "it-CH",
                "value" : "Irbesartan"
              },
              {
                "language" : "rm-CH",
                "value" : "Irbesartan"
              },
              {
                "language" : "en-US",
                "value" : "Irbesartan"
              }
            ]
          },
          {
            "code" : "372538008",
            "display" : "Irinotecan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Irinotecan"
              },
              {
                "language" : "fr-CH",
                "value" : "irinotécan"
              },
              {
                "language" : "it-CH",
                "value" : "Irinotecan"
              },
              {
                "language" : "rm-CH",
                "value" : "Irinotecan"
              },
              {
                "language" : "en-US",
                "value" : "Irinotecan"
              }
            ]
          },
          {
            "code" : "3829006",
            "display" : "Iron (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eisen"
              },
              {
                "language" : "fr-CH",
                "value" : "fer"
              },
              {
                "language" : "it-CH",
                "value" : "Ferro"
              },
              {
                "language" : "rm-CH",
                "value" : "Eisen"
              },
              {
                "language" : "en-US",
                "value" : "Iron"
              }
            ]
          },
          {
            "code" : "708805001",
            "display" : "Iron polymaltose (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Eisen(III)-hydroxid-Polymaltose-Komplex"
              },
              {
                "language" : "fr-CH",
                "value" : "fer hydroxyde polymalté"
              },
              {
                "language" : "it-CH",
                "value" : "Ferro (III) idrossido polimaltosato"
              },
              {
                "language" : "rm-CH",
                "value" : "Eisen(III)-hydroxid-Polymaltose-Komplex"
              },
              {
                "language" : "en-US",
                "value" : "Iron polymaltose"
              }
            ]
          },
          {
            "code" : "765386003",
            "display" : "Isavuconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isavuconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "isavuconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Isavuconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Isavuconazol"
              },
              {
                "language" : "en-US",
                "value" : "Isavuconazole"
              }
            ]
          },
          {
            "code" : "418371001",
            "display" : "Isoconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isoconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "isoconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Isoconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Isoconazol"
              },
              {
                "language" : "en-US",
                "value" : "Isoconazole"
              }
            ]
          },
          {
            "code" : "14971004",
            "display" : "Isoleucine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isoleucin"
              },
              {
                "language" : "fr-CH",
                "value" : "isoleucine"
              },
              {
                "language" : "it-CH",
                "value" : "Isoleucina"
              },
              {
                "language" : "rm-CH",
                "value" : "Isoleucin"
              },
              {
                "language" : "en-US",
                "value" : "Isoleucine"
              }
            ]
          },
          {
            "code" : "387472004",
            "display" : "Isoniazid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isoniazid"
              },
              {
                "language" : "fr-CH",
                "value" : "isoniazide"
              },
              {
                "language" : "it-CH",
                "value" : "Isoniazide"
              },
              {
                "language" : "rm-CH",
                "value" : "Isoniazid"
              },
              {
                "language" : "en-US",
                "value" : "Isoniazid"
              }
            ]
          },
          {
            "code" : "372781009",
            "display" : "Isoprenaline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isoprenalin"
              },
              {
                "language" : "fr-CH",
                "value" : "isoprénaline"
              },
              {
                "language" : "it-CH",
                "value" : "Isoprenalina"
              },
              {
                "language" : "rm-CH",
                "value" : "Isoprenalin"
              },
              {
                "language" : "en-US",
                "value" : "Isoprenaline"
              }
            ]
          },
          {
            "code" : "259268001",
            "display" : "Isopropyl alcohol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isopropylalkohol"
              },
              {
                "language" : "fr-CH",
                "value" : "isopropanol"
              },
              {
                "language" : "it-CH",
                "value" : "Alcol isopropilico"
              },
              {
                "language" : "rm-CH",
                "value" : "Isopropylalkohol"
              },
              {
                "language" : "en-US",
                "value" : "Isopropyl alcohol"
              }
            ]
          },
          {
            "code" : "387332007",
            "display" : "Isosorbide dinitrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isosorbid dinitrat"
              },
              {
                "language" : "fr-CH",
                "value" : "isosorbide dinitrate"
              },
              {
                "language" : "it-CH",
                "value" : "Isosorbide dinitrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Isosorbid dinitrat"
              },
              {
                "language" : "en-US",
                "value" : "Isosorbide dinitrate"
              }
            ]
          },
          {
            "code" : "387208003",
            "display" : "Isotretinoin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Isotretinoin"
              },
              {
                "language" : "fr-CH",
                "value" : "isotrétinoïne"
              },
              {
                "language" : "it-CH",
                "value" : "Isotretinoina"
              },
              {
                "language" : "rm-CH",
                "value" : "Isotretinoin"
              },
              {
                "language" : "en-US",
                "value" : "Isotretinoin"
              }
            ]
          },
          {
            "code" : "387532006",
            "display" : "Itraconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Itraconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "itraconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Itraconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Itraconazol"
              },
              {
                "language" : "en-US",
                "value" : "Itraconazole"
              }
            ]
          },
          {
            "code" : "421228002",
            "display" : "Ivabradine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ivabradin"
              },
              {
                "language" : "fr-CH",
                "value" : "ivabradine"
              },
              {
                "language" : "it-CH",
                "value" : "Ivabradina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ivabradin"
              },
              {
                "language" : "en-US",
                "value" : "Ivabradine"
              }
            ]
          },
          {
            "code" : "703823007",
            "display" : "Ivacaftor (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ivacaftor"
              },
              {
                "language" : "fr-CH",
                "value" : "ivacaftor"
              },
              {
                "language" : "it-CH",
                "value" : "Ivacaftor"
              },
              {
                "language" : "rm-CH",
                "value" : "Ivacaftor"
              },
              {
                "language" : "en-US",
                "value" : "Ivacaftor"
              }
            ]
          },
          {
            "code" : "387559003",
            "display" : "Ivermectin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ivermectin"
              },
              {
                "language" : "fr-CH",
                "value" : "ivermectine"
              },
              {
                "language" : "it-CH",
                "value" : "Ivermectina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ivermectin"
              },
              {
                "language" : "en-US",
                "value" : "Ivermectin"
              }
            ]
          },
          {
            "code" : "724037000",
            "display" : "Ixekizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ixekizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "ixékizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Ixekizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Ixekizumab"
              },
              {
                "language" : "en-US",
                "value" : "Ixekizumab"
              }
            ]
          },
          {
            "code" : "373464007",
            "display" : "Ketamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ketamin"
              },
              {
                "language" : "fr-CH",
                "value" : "kétamine"
              },
              {
                "language" : "it-CH",
                "value" : "Ketamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ketamin"
              },
              {
                "language" : "en-US",
                "value" : "Ketamine"
              }
            ]
          },
          {
            "code" : "387216007",
            "display" : "Ketoconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ketoconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "kétoconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Ketoconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Ketoconazol"
              },
              {
                "language" : "en-US",
                "value" : "Ketoconazole"
              }
            ]
          },
          {
            "code" : "386832008",
            "display" : "Ketoprofen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ketoprofen"
              },
              {
                "language" : "fr-CH",
                "value" : "kétoprofène"
              },
              {
                "language" : "it-CH",
                "value" : "Ketoprofene"
              },
              {
                "language" : "rm-CH",
                "value" : "Ketoprofen"
              },
              {
                "language" : "en-US",
                "value" : "Ketoprofen"
              }
            ]
          },
          {
            "code" : "372501008",
            "display" : "Ketorolac (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ketorolac"
              },
              {
                "language" : "fr-CH",
                "value" : "kétorolac"
              },
              {
                "language" : "it-CH",
                "value" : "Ketorolac"
              },
              {
                "language" : "rm-CH",
                "value" : "Ketorolac"
              },
              {
                "language" : "en-US",
                "value" : "Ketorolac"
              }
            ]
          },
          {
            "code" : "372642003",
            "display" : "Ketotifen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ketotifen"
              },
              {
                "language" : "fr-CH",
                "value" : "kétotifène"
              },
              {
                "language" : "it-CH",
                "value" : "Ketotifene"
              },
              {
                "language" : "rm-CH",
                "value" : "Ketotifen"
              },
              {
                "language" : "en-US",
                "value" : "Ketotifen"
              }
            ]
          },
          {
            "code" : "372750000",
            "display" : "Labetalol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Labetalol"
              },
              {
                "language" : "fr-CH",
                "value" : "labétalol"
              },
              {
                "language" : "it-CH",
                "value" : "Labetalolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Labetalol"
              },
              {
                "language" : "en-US",
                "value" : "Labetalol"
              }
            ]
          },
          {
            "code" : "441647003",
            "display" : "Lacosamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lacosamid"
              },
              {
                "language" : "fr-CH",
                "value" : "lacosamide"
              },
              {
                "language" : "it-CH",
                "value" : "Lacosamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Lacosamid"
              },
              {
                "language" : "en-US",
                "value" : "Lacosamide"
              }
            ]
          },
          {
            "code" : "418929008",
            "display" : "Lactitol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lactitol"
              },
              {
                "language" : "fr-CH",
                "value" : "lactitol"
              },
              {
                "language" : "it-CH",
                "value" : "Lattilolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Lactitol"
              },
              {
                "language" : "en-US",
                "value" : "Lactitol"
              }
            ]
          },
          {
            "code" : "47703008",
            "display" : "Lactose (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lactose"
              },
              {
                "language" : "fr-CH",
                "value" : "lactose"
              },
              {
                "language" : "it-CH",
                "value" : "Lattosio"
              },
              {
                "language" : "rm-CH",
                "value" : "Lactose"
              },
              {
                "language" : "en-US",
                "value" : "Lactose"
              }
            ]
          },
          {
            "code" : "273945008",
            "display" : "Lactulose (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lactulose"
              },
              {
                "language" : "fr-CH",
                "value" : "lactulose"
              },
              {
                "language" : "it-CH",
                "value" : "Lattulosio"
              },
              {
                "language" : "rm-CH",
                "value" : "Lactulose"
              },
              {
                "language" : "en-US",
                "value" : "Lactulose"
              }
            ]
          },
          {
            "code" : "386897000",
            "display" : "Lamivudine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lamivudin"
              },
              {
                "language" : "fr-CH",
                "value" : "lamivudine"
              },
              {
                "language" : "it-CH",
                "value" : "Lamivudina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lamivudin"
              },
              {
                "language" : "en-US",
                "value" : "Lamivudine"
              }
            ]
          },
          {
            "code" : "387562000",
            "display" : "Lamotrigine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lamotrigin"
              },
              {
                "language" : "fr-CH",
                "value" : "lamotrigine"
              },
              {
                "language" : "it-CH",
                "value" : "Lamotrigina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lamotrigin"
              },
              {
                "language" : "en-US",
                "value" : "Lamotrigine"
              }
            ]
          },
          {
            "code" : "395765000",
            "display" : "Lanreotide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lanreotid"
              },
              {
                "language" : "fr-CH",
                "value" : "lanréotide"
              },
              {
                "language" : "it-CH",
                "value" : "Lanreotide"
              },
              {
                "language" : "rm-CH",
                "value" : "Lanreotid"
              },
              {
                "language" : "en-US",
                "value" : "Lanreotide"
              }
            ]
          },
          {
            "code" : "386888004",
            "display" : "Lansoprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lansoprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "lansoprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Lansoprazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Lansoprazol"
              },
              {
                "language" : "en-US",
                "value" : "Lansoprazole"
              }
            ]
          },
          {
            "code" : "414571007",
            "display" : "Lanthanum carbonate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lanthan(III) carbonat"
              },
              {
                "language" : "fr-CH",
                "value" : "lanthane(III) carbonate"
              },
              {
                "language" : "it-CH",
                "value" : "Lantanio carbonato"
              },
              {
                "language" : "rm-CH",
                "value" : "Lanthan(III) carbonat"
              },
              {
                "language" : "en-US",
                "value" : "Lanthanum carbonate"
              }
            ]
          },
          {
            "code" : "386926002",
            "display" : "Latanoprost (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Latanoprost"
              },
              {
                "language" : "fr-CH",
                "value" : "latanoprost"
              },
              {
                "language" : "it-CH",
                "value" : "Latanoprost"
              },
              {
                "language" : "rm-CH",
                "value" : "Latanoprost"
              },
              {
                "language" : "en-US",
                "value" : "Latanoprost"
              }
            ]
          },
          {
            "code" : "427905004",
            "display" : "Lauromacrogol 400 (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lauromacrogol 400"
              },
              {
                "language" : "fr-CH",
                "value" : "lauromacrogol 400"
              },
              {
                "language" : "it-CH",
                "value" : "Lauromacrogol"
              },
              {
                "language" : "rm-CH",
                "value" : "Lauromacrogol 400"
              },
              {
                "language" : "en-US",
                "value" : "Lauromacrogol 400"
              }
            ]
          },
          {
            "code" : "386981009",
            "display" : "Leflunomide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Leflunomid"
              },
              {
                "language" : "fr-CH",
                "value" : "léflunomide"
              },
              {
                "language" : "it-CH",
                "value" : "Leflunomide"
              },
              {
                "language" : "rm-CH",
                "value" : "Leflunomid"
              },
              {
                "language" : "en-US",
                "value" : "Leflunomide"
              }
            ]
          },
          {
            "code" : "421471009",
            "display" : "Lenalidomide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lenalidomid"
              },
              {
                "language" : "fr-CH",
                "value" : "lénalidomide"
              },
              {
                "language" : "it-CH",
                "value" : "Lenalidomide"
              },
              {
                "language" : "rm-CH",
                "value" : "Lenalidomid"
              },
              {
                "language" : "en-US",
                "value" : "Lenalidomide"
              }
            ]
          },
          {
            "code" : "395767008",
            "display" : "Lenograstime (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lenograstim"
              },
              {
                "language" : "fr-CH",
                "value" : "lénograstim"
              },
              {
                "language" : "it-CH",
                "value" : "Lenograstim"
              },
              {
                "language" : "rm-CH",
                "value" : "Lenograstim"
              },
              {
                "language" : "en-US",
                "value" : "Lenograstime"
              }
            ]
          },
          {
            "code" : "395986007",
            "display" : "Lercanidipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lercanidipin"
              },
              {
                "language" : "fr-CH",
                "value" : "lercanidipine"
              },
              {
                "language" : "it-CH",
                "value" : "Lercanidipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lercanidipin"
              },
              {
                "language" : "en-US",
                "value" : "Lercanidipine"
              }
            ]
          },
          {
            "code" : "386911004",
            "display" : "Letrozole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Letrozol"
              },
              {
                "language" : "fr-CH",
                "value" : "létrozole"
              },
              {
                "language" : "it-CH",
                "value" : "Letrozolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Letrozol"
              },
              {
                "language" : "en-US",
                "value" : "Letrozole"
              }
            ]
          },
          {
            "code" : "83797003",
            "display" : "Leucine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Leucin"
              },
              {
                "language" : "fr-CH",
                "value" : "leucine"
              },
              {
                "language" : "it-CH",
                "value" : "Leucina"
              },
              {
                "language" : "rm-CH",
                "value" : "Leucin"
              },
              {
                "language" : "en-US",
                "value" : "Leucine"
              }
            ]
          },
          {
            "code" : "397198002",
            "display" : "Leuprorelin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Leuprorelin"
              },
              {
                "language" : "fr-CH",
                "value" : "leuproréline"
              },
              {
                "language" : "it-CH",
                "value" : "Leuprorelina"
              },
              {
                "language" : "rm-CH",
                "value" : "Leuprorelin"
              },
              {
                "language" : "en-US",
                "value" : "Leuprorelin"
              }
            ]
          },
          {
            "code" : "387000003",
            "display" : "Levetiracetam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levetiracetam"
              },
              {
                "language" : "fr-CH",
                "value" : "lévétiracétam"
              },
              {
                "language" : "it-CH",
                "value" : "Levetiracetam"
              },
              {
                "language" : "rm-CH",
                "value" : "Levetiracetam"
              },
              {
                "language" : "en-US",
                "value" : "Levetiracetam"
              }
            ]
          },
          {
            "code" : "387011006",
            "display" : "Levobupivacaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levobupivacain"
              },
              {
                "language" : "fr-CH",
                "value" : "lévobupivacaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Levobupivacaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Levobupivacain"
              },
              {
                "language" : "en-US",
                "value" : "Levobupivacaine"
              }
            ]
          },
          {
            "code" : "372554006",
            "display" : "Levocabastine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levocabastin"
              },
              {
                "language" : "fr-CH",
                "value" : "lévocabastine"
              },
              {
                "language" : "it-CH",
                "value" : "Levocabastina"
              },
              {
                "language" : "rm-CH",
                "value" : "Levocabastin"
              },
              {
                "language" : "en-US",
                "value" : "Levocabastine"
              }
            ]
          },
          {
            "code" : "372601001",
            "display" : "Levocarnitine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levocarnitin"
              },
              {
                "language" : "fr-CH",
                "value" : "lévocarnitine"
              },
              {
                "language" : "it-CH",
                "value" : "Levocarnitina"
              },
              {
                "language" : "rm-CH",
                "value" : "Levocarnitin"
              },
              {
                "language" : "en-US",
                "value" : "Levocarnitine"
              }
            ]
          },
          {
            "code" : "421889003",
            "display" : "Levocetirizine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levocetirizin"
              },
              {
                "language" : "fr-CH",
                "value" : "lévocétirizine"
              },
              {
                "language" : "it-CH",
                "value" : "Levocetirizina"
              },
              {
                "language" : "rm-CH",
                "value" : "Levocetirizin"
              },
              {
                "language" : "en-US",
                "value" : "Levocetirizine"
              }
            ]
          },
          {
            "code" : "387086006",
            "display" : "Levodopa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levodopa"
              },
              {
                "language" : "fr-CH",
                "value" : "lévodopa"
              },
              {
                "language" : "it-CH",
                "value" : "Levodopa"
              },
              {
                "language" : "rm-CH",
                "value" : "Levodopa"
              },
              {
                "language" : "en-US",
                "value" : "Levodopa"
              }
            ]
          },
          {
            "code" : "387552007",
            "display" : "Levofloxacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levofloxacin"
              },
              {
                "language" : "fr-CH",
                "value" : "lévofloxacine"
              },
              {
                "language" : "it-CH",
                "value" : "Levofloxacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Levofloxacin"
              },
              {
                "language" : "en-US",
                "value" : "Levofloxacin"
              }
            ]
          },
          {
            "code" : "387509007",
            "display" : "Levomepromazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levomepromazin"
              },
              {
                "language" : "fr-CH",
                "value" : "lévomépromazine"
              },
              {
                "language" : "it-CH",
                "value" : "Levomepromazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Levomepromazin"
              },
              {
                "language" : "en-US",
                "value" : "Levomepromazine"
              }
            ]
          },
          {
            "code" : "126109000",
            "display" : "Levonorgestrel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levonorgestrel"
              },
              {
                "language" : "fr-CH",
                "value" : "lévonorgestrel"
              },
              {
                "language" : "it-CH",
                "value" : "Levonorgestrel"
              },
              {
                "language" : "rm-CH",
                "value" : "Levonorgestrel"
              },
              {
                "language" : "en-US",
                "value" : "Levonorgestrel"
              }
            ]
          },
          {
            "code" : "442795003",
            "display" : "Levosimendan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levosimendan"
              },
              {
                "language" : "fr-CH",
                "value" : "lévosimendan"
              },
              {
                "language" : "it-CH",
                "value" : "Levosimendan"
              },
              {
                "language" : "rm-CH",
                "value" : "Levosimendan"
              },
              {
                "language" : "en-US",
                "value" : "Levosimendan"
              }
            ]
          },
          {
            "code" : "710809001",
            "display" : "Levothyroxine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Levothyroxin"
              },
              {
                "language" : "fr-CH",
                "value" : "lévothyroxine"
              },
              {
                "language" : "it-CH",
                "value" : "Levotiroxina"
              },
              {
                "language" : "rm-CH",
                "value" : "Levothyroxin"
              },
              {
                "language" : "en-US",
                "value" : "Levothyroxine"
              }
            ]
          },
          {
            "code" : "387480006",
            "display" : "Lidocaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lidocain"
              },
              {
                "language" : "fr-CH",
                "value" : "lidocaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Lidocaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lidocain"
              },
              {
                "language" : "en-US",
                "value" : "Lidocaine"
              }
            ]
          },
          {
            "code" : "702798009",
            "display" : "Linagliptin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Linagliptin"
              },
              {
                "language" : "fr-CH",
                "value" : "linagliptine"
              },
              {
                "language" : "it-CH",
                "value" : "Linagliptin"
              },
              {
                "language" : "rm-CH",
                "value" : "Linagliptin"
              },
              {
                "language" : "en-US",
                "value" : "Linagliptin"
              }
            ]
          },
          {
            "code" : "387056004",
            "display" : "Linezolid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Linezolid"
              },
              {
                "language" : "fr-CH",
                "value" : "linézolide"
              },
              {
                "language" : "it-CH",
                "value" : "Linezolid"
              },
              {
                "language" : "rm-CH",
                "value" : "Linezolid"
              },
              {
                "language" : "en-US",
                "value" : "Linezolid"
              }
            ]
          },
          {
            "code" : "61275002",
            "display" : "Liothyronine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Liothyronin"
              },
              {
                "language" : "fr-CH",
                "value" : "liothyronine"
              },
              {
                "language" : "it-CH",
                "value" : "Liotironina"
              },
              {
                "language" : "rm-CH",
                "value" : "Liothyronin"
              },
              {
                "language" : "en-US",
                "value" : "Liothyronine"
              }
            ]
          },
          {
            "code" : "444828003",
            "display" : "Liraglutide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Liraglutid"
              },
              {
                "language" : "fr-CH",
                "value" : "liraglutide"
              },
              {
                "language" : "it-CH",
                "value" : "Liraglutide"
              },
              {
                "language" : "rm-CH",
                "value" : "Liraglutid"
              },
              {
                "language" : "en-US",
                "value" : "Liraglutide"
              }
            ]
          },
          {
            "code" : "425597005",
            "display" : "Lisdexamfetamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lisdexamfetamin"
              },
              {
                "language" : "fr-CH",
                "value" : "lisdexamfétamine"
              },
              {
                "language" : "it-CH",
                "value" : "Lisdexamfetamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lisdexamfetamin"
              },
              {
                "language" : "en-US",
                "value" : "Lisdexamfetamine"
              }
            ]
          },
          {
            "code" : "386873009",
            "display" : "Lisinopril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lisinopril"
              },
              {
                "language" : "fr-CH",
                "value" : "lisinopril"
              },
              {
                "language" : "it-CH",
                "value" : "Lisinopril"
              },
              {
                "language" : "rm-CH",
                "value" : "Lisinopril"
              },
              {
                "language" : "en-US",
                "value" : "Lisinopril"
              }
            ]
          },
          {
            "code" : "111080000",
            "display" : "Lithium acetate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lithium acetat"
              },
              {
                "language" : "fr-CH",
                "value" : "lithium acétate"
              },
              {
                "language" : "it-CH",
                "value" : "Litio acetato"
              },
              {
                "language" : "rm-CH",
                "value" : "Lithium acetat"
              },
              {
                "language" : "en-US",
                "value" : "Lithium acetate"
              }
            ]
          },
          {
            "code" : "387095003",
            "display" : "Lithium carbonate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lithium carbonat"
              },
              {
                "language" : "fr-CH",
                "value" : "lithium carbonate"
              },
              {
                "language" : "it-CH",
                "value" : "Litio carbonato"
              },
              {
                "language" : "rm-CH",
                "value" : "Lithium carbonat"
              },
              {
                "language" : "en-US",
                "value" : "Lithium carbonate"
              }
            ]
          },
          {
            "code" : "708197001",
            "display" : "Lithium sulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lithiumsulfat"
              },
              {
                "language" : "fr-CH",
                "value" : "lithium sulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Litio solfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Lithiumsulfat"
              },
              {
                "language" : "en-US",
                "value" : "Lithium sulfate"
              }
            ]
          },
          {
            "code" : "708808004",
            "display" : "Lixisenatide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lixisenatid"
              },
              {
                "language" : "fr-CH",
                "value" : "lixisénatide"
              },
              {
                "language" : "it-CH",
                "value" : "Lixisenatide"
              },
              {
                "language" : "rm-CH",
                "value" : "Lixisenatid"
              },
              {
                "language" : "en-US",
                "value" : "Lixisenatide"
              }
            ]
          },
          {
            "code" : "387227009",
            "display" : "Lomustine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lomustin"
              },
              {
                "language" : "fr-CH",
                "value" : "lomustine"
              },
              {
                "language" : "it-CH",
                "value" : "Lomustina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lomustin"
              },
              {
                "language" : "en-US",
                "value" : "Lomustine"
              }
            ]
          },
          {
            "code" : "1012961000168107",
            "display" : "Lonoctocog alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lonoctocog alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "lonoctocog alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Lonoctocog alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Lonoctocog alfa"
              },
              {
                "language" : "en-US",
                "value" : "Lonoctocog alfa"
              }
            ]
          },
          {
            "code" : "387040009",
            "display" : "Loperamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Loperamid"
              },
              {
                "language" : "fr-CH",
                "value" : "lopéramide"
              },
              {
                "language" : "it-CH",
                "value" : "Loperamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Loperamid"
              },
              {
                "language" : "en-US",
                "value" : "Loperamide"
              }
            ]
          },
          {
            "code" : "387067003",
            "display" : "Lopinavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lopinavir"
              },
              {
                "language" : "fr-CH",
                "value" : "lopinavir"
              },
              {
                "language" : "it-CH",
                "value" : "Lopinavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Lopinavir"
              },
              {
                "language" : "en-US",
                "value" : "Lopinavir"
              }
            ]
          },
          {
            "code" : "386884002",
            "display" : "Loratadine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Loratadin"
              },
              {
                "language" : "fr-CH",
                "value" : "loratadine"
              },
              {
                "language" : "it-CH",
                "value" : "Loratadina"
              },
              {
                "language" : "rm-CH",
                "value" : "Loratadin"
              },
              {
                "language" : "en-US",
                "value" : "Loratadine"
              }
            ]
          },
          {
            "code" : "387106007",
            "display" : "Lorazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lorazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "lorazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Lorazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Lorazepam"
              },
              {
                "language" : "en-US",
                "value" : "Lorazepam"
              }
            ]
          },
          {
            "code" : "387570005",
            "display" : "Lormetazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lormetazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "lormétazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Lormetazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Lormetazepam"
              },
              {
                "language" : "en-US",
                "value" : "Lormetazepam"
              }
            ]
          },
          {
            "code" : "373567002",
            "display" : "Losartan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Losartan"
              },
              {
                "language" : "fr-CH",
                "value" : "losartan"
              },
              {
                "language" : "it-CH",
                "value" : "Losartan"
              },
              {
                "language" : "rm-CH",
                "value" : "Losartan"
              },
              {
                "language" : "en-US",
                "value" : "Losartan"
              }
            ]
          },
          {
            "code" : "420307001",
            "display" : "Lumefantrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lumefantrin"
              },
              {
                "language" : "fr-CH",
                "value" : "luméfantrine"
              },
              {
                "language" : "it-CH",
                "value" : "Lumefantrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lumefantrin"
              },
              {
                "language" : "en-US",
                "value" : "Lumefantrine"
              }
            ]
          },
          {
            "code" : "703115008",
            "display" : "Lurasidone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lurasidon"
              },
              {
                "language" : "fr-CH",
                "value" : "lurasidone"
              },
              {
                "language" : "it-CH",
                "value" : "Lurasidone"
              },
              {
                "language" : "rm-CH",
                "value" : "Lurasidon"
              },
              {
                "language" : "en-US",
                "value" : "Lurasidone"
              }
            ]
          },
          {
            "code" : "415248001",
            "display" : "Lutropin alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lutropin alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "lutropine alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Lutropina alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Lutropin alfa"
              },
              {
                "language" : "en-US",
                "value" : "Lutropin alfa"
              }
            ]
          },
          {
            "code" : "75799006",
            "display" : "Lysine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lysin"
              },
              {
                "language" : "fr-CH",
                "value" : "lysine"
              },
              {
                "language" : "it-CH",
                "value" : "Lisina"
              },
              {
                "language" : "rm-CH",
                "value" : "Lysin"
              },
              {
                "language" : "en-US",
                "value" : "Lysine"
              }
            ]
          },
          {
            "code" : "710283008",
            "display" : "Macitentan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Macitentan"
              },
              {
                "language" : "fr-CH",
                "value" : "macitentan"
              },
              {
                "language" : "it-CH",
                "value" : "Macitentan"
              },
              {
                "language" : "rm-CH",
                "value" : "Macitentan"
              },
              {
                "language" : "en-US",
                "value" : "Macitentan"
              }
            ]
          },
          {
            "code" : "8030004",
            "display" : "Macrogol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Macrogol"
              },
              {
                "language" : "fr-CH",
                "value" : "macrogol"
              },
              {
                "language" : "it-CH",
                "value" : "Macrogol"
              },
              {
                "language" : "rm-CH",
                "value" : "Macrogol"
              },
              {
                "language" : "en-US",
                "value" : "Macrogol"
              }
            ]
          },
          {
            "code" : "712566007",
            "display" : "Macrogol 3350 (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Macrogol 3350"
              },
              {
                "language" : "fr-CH",
                "value" : "macrogol 3350"
              },
              {
                "language" : "it-CH",
                "value" : "Macrogol 3350"
              },
              {
                "language" : "rm-CH",
                "value" : "Macrogol 3350"
              },
              {
                "language" : "en-US",
                "value" : "Macrogol 3350"
              }
            ]
          },
          {
            "code" : "712567003",
            "display" : "Macrogol 4000 (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Macrogol 4000"
              },
              {
                "language" : "fr-CH",
                "value" : "macrogol 4000"
              },
              {
                "language" : "it-CH",
                "value" : "Macrogol 4000"
              },
              {
                "language" : "rm-CH",
                "value" : "Macrogol 4000"
              },
              {
                "language" : "en-US",
                "value" : "Macrogol 4000"
              }
            ]
          },
          {
            "code" : "387240004",
            "display" : "Magaldrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magaldrat"
              },
              {
                "language" : "fr-CH",
                "value" : "magaldrate"
              },
              {
                "language" : "it-CH",
                "value" : "Magaldrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Magaldrat"
              },
              {
                "language" : "en-US",
                "value" : "Magaldrate"
              }
            ]
          },
          {
            "code" : "72717003",
            "display" : "Magnesium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnesium"
              },
              {
                "language" : "fr-CH",
                "value" : "magnésium"
              },
              {
                "language" : "it-CH",
                "value" : "Magnesio"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnesium"
              },
              {
                "language" : "en-US",
                "value" : "Magnesium"
              }
            ]
          },
          {
            "code" : "723586001",
            "display" : "Magnesium acetate tetrahydrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnesium diacetat-4-Wasser"
              },
              {
                "language" : "fr-CH",
                "value" : "magnésium acétate tétrahydrique"
              },
              {
                "language" : "it-CH",
                "value" : "Magnesio acetato tetraidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnesium diacetat-4-Wasser"
              },
              {
                "language" : "en-US",
                "value" : "Magnesium acetate tetrahydrate"
              }
            ]
          },
          {
            "code" : "387401007",
            "display" : "Magnesium carbonate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnesium carbonat"
              },
              {
                "language" : "fr-CH",
                "value" : "magnésium carbonate"
              },
              {
                "language" : "it-CH",
                "value" : "Magnesio carbonato"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnesium carbonat"
              },
              {
                "language" : "en-US",
                "value" : "Magnesium carbonate"
              }
            ]
          },
          {
            "code" : "45733002",
            "display" : "Magnesium chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnesiumchlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "magnésium chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Magnesio cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnesiumchlorid"
              },
              {
                "language" : "en-US",
                "value" : "Magnesium chloride"
              }
            ]
          },
          {
            "code" : "116126005",
            "display" : "Magnesium gluconate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnesium digluconat wasserfrei"
              },
              {
                "language" : "fr-CH",
                "value" : "magnésium digluconate anhydre"
              },
              {
                "language" : "it-CH",
                "value" : "Magnesio gluconato"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnesium digluconat wasserfrei"
              },
              {
                "language" : "en-US",
                "value" : "Magnesium gluconate"
              }
            ]
          },
          {
            "code" : "387337001",
            "display" : "Magnesium hydroxide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnesiumhydroxid"
              },
              {
                "language" : "fr-CH",
                "value" : "magnésium hydroxyde"
              },
              {
                "language" : "it-CH",
                "value" : "Magnesio idrossido"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnesiumhydroxid"
              },
              {
                "language" : "en-US",
                "value" : "Magnesium hydroxide"
              }
            ]
          },
          {
            "code" : "387202002",
            "display" : "Magnesium sulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Magnesiumsulfat"
              },
              {
                "language" : "fr-CH",
                "value" : "magnésium sulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Magnesio solfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Magnesiumsulfat"
              },
              {
                "language" : "en-US",
                "value" : "Magnesium sulfate"
              }
            ]
          },
          {
            "code" : "387168006",
            "display" : "Mannitol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mannitol"
              },
              {
                "language" : "fr-CH",
                "value" : "mannitol"
              },
              {
                "language" : "it-CH",
                "value" : "Mannitolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Mannitol"
              },
              {
                "language" : "en-US",
                "value" : "Mannitol"
              }
            ]
          },
          {
            "code" : "429603001",
            "display" : "Maraviroc (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Maraviroc"
              },
              {
                "language" : "fr-CH",
                "value" : "maraviroc"
              },
              {
                "language" : "it-CH",
                "value" : "Maraviroc"
              },
              {
                "language" : "rm-CH",
                "value" : "Maraviroc"
              },
              {
                "language" : "en-US",
                "value" : "Maraviroc"
              }
            ]
          },
          {
            "code" : "387311004",
            "display" : "Mebendazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mebendazol"
              },
              {
                "language" : "fr-CH",
                "value" : "mébendazole"
              },
              {
                "language" : "it-CH",
                "value" : "Mebendazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Mebendazol"
              },
              {
                "language" : "en-US",
                "value" : "Mebendazole"
              }
            ]
          },
          {
            "code" : "419830007",
            "display" : "Mebeverine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mebeverin"
              },
              {
                "language" : "fr-CH",
                "value" : "mébévérine"
              },
              {
                "language" : "it-CH",
                "value" : "Mebeverina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mebeverin"
              },
              {
                "language" : "en-US",
                "value" : "Mebeverine"
              }
            ]
          },
          {
            "code" : "372879002",
            "display" : "Meclozine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Meclozin"
              },
              {
                "language" : "fr-CH",
                "value" : "méclozine"
              },
              {
                "language" : "it-CH",
                "value" : "Meclozina"
              },
              {
                "language" : "rm-CH",
                "value" : "Meclozin"
              },
              {
                "language" : "en-US",
                "value" : "Meclozine"
              }
            ]
          },
          {
            "code" : "395781005",
            "display" : "Medium chain triglyceride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Triglyceride mittelkettige"
              },
              {
                "language" : "fr-CH",
                "value" : "triglycérides à chaîne moyenne"
              },
              {
                "language" : "it-CH",
                "value" : "Trigliceridi a catena media"
              },
              {
                "language" : "rm-CH",
                "value" : "Triglyceride mittelkettige"
              },
              {
                "language" : "en-US",
                "value" : "Medium chain triglyceride"
              }
            ]
          },
          {
            "code" : "126113007",
            "display" : "Medroxyprogesterone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medroxyprogesteron"
              },
              {
                "language" : "fr-CH",
                "value" : "médroxyprogestérone"
              },
              {
                "language" : "it-CH",
                "value" : "Medrossiprogesterone acetato"
              },
              {
                "language" : "rm-CH",
                "value" : "Medroxyprogesteron"
              },
              {
                "language" : "en-US",
                "value" : "Medroxyprogesterone"
              }
            ]
          },
          {
            "code" : "387185008",
            "display" : "Mefenamic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mefenaminsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide méfénamique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido mefenamico"
              },
              {
                "language" : "rm-CH",
                "value" : "Mefenaminsäure"
              },
              {
                "language" : "en-US",
                "value" : "Mefenamic acid"
              }
            ]
          },
          {
            "code" : "387505001",
            "display" : "Mefloquine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mefloquin"
              },
              {
                "language" : "fr-CH",
                "value" : "méfloquine"
              },
              {
                "language" : "it-CH",
                "value" : "Meflochina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mefloquin"
              },
              {
                "language" : "en-US",
                "value" : "Mefloquine"
              }
            ]
          },
          {
            "code" : "769091004",
            "display" : "Meglumine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Meglumin"
              },
              {
                "language" : "fr-CH",
                "value" : "méglumine"
              },
              {
                "language" : "it-CH",
                "value" : "Meglumina"
              },
              {
                "language" : "rm-CH",
                "value" : "Meglumin"
              },
              {
                "language" : "en-US",
                "value" : "Meglumine"
              }
            ]
          },
          {
            "code" : "41199001",
            "display" : "Melatonin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Melatonin"
              },
              {
                "language" : "fr-CH",
                "value" : "mélatonine"
              },
              {
                "language" : "it-CH",
                "value" : "Melatonina"
              },
              {
                "language" : "rm-CH",
                "value" : "Melatonin"
              },
              {
                "language" : "en-US",
                "value" : "Melatonin"
              }
            ]
          },
          {
            "code" : "712683007",
            "display" : "Melitracen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Melitracen"
              },
              {
                "language" : "fr-CH",
                "value" : "mélitracène"
              },
              {
                "language" : "it-CH",
                "value" : "Melitracene"
              },
              {
                "language" : "rm-CH",
                "value" : "Melitracen"
              },
              {
                "language" : "en-US",
                "value" : "Melitracen"
              }
            ]
          },
          {
            "code" : "442519006",
            "display" : "Melperone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Melperon"
              },
              {
                "language" : "fr-CH",
                "value" : "melpérone"
              },
              {
                "language" : "it-CH",
                "value" : "Melperone"
              },
              {
                "language" : "rm-CH",
                "value" : "Melperon"
              },
              {
                "language" : "en-US",
                "value" : "Melperone"
              }
            ]
          },
          {
            "code" : "387297002",
            "display" : "Melphalan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Melphalan"
              },
              {
                "language" : "fr-CH",
                "value" : "melphalan"
              },
              {
                "language" : "it-CH",
                "value" : "Melphalan"
              },
              {
                "language" : "rm-CH",
                "value" : "Melphalan"
              },
              {
                "language" : "en-US",
                "value" : "Melphalan"
              }
            ]
          },
          {
            "code" : "406458000",
            "display" : "Memantine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Memantin"
              },
              {
                "language" : "fr-CH",
                "value" : "mémantine"
              },
              {
                "language" : "it-CH",
                "value" : "Memantina"
              },
              {
                "language" : "rm-CH",
                "value" : "Memantin"
              },
              {
                "language" : "en-US",
                "value" : "Memantine"
              }
            ]
          },
          {
            "code" : "59560006",
            "display" : "Mepivacaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mepivacain"
              },
              {
                "language" : "fr-CH",
                "value" : "mépivacaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Mepicacaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mepivacain"
              },
              {
                "language" : "en-US",
                "value" : "Mepivacaine"
              }
            ]
          },
          {
            "code" : "373457005",
            "display" : "Mercaptamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mercaptamin"
              },
              {
                "language" : "fr-CH",
                "value" : "mercaptamine"
              },
              {
                "language" : "it-CH",
                "value" : "Mercaptamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mercaptamin"
              },
              {
                "language" : "en-US",
                "value" : "Mercaptamine"
              }
            ]
          },
          {
            "code" : "387540000",
            "display" : "Meropenem (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Meropenem"
              },
              {
                "language" : "fr-CH",
                "value" : "méropénem"
              },
              {
                "language" : "it-CH",
                "value" : "Meropenem"
              },
              {
                "language" : "rm-CH",
                "value" : "Meropenem"
              },
              {
                "language" : "en-US",
                "value" : "Meropenem"
              }
            ]
          },
          {
            "code" : "387501005",
            "display" : "Mesalazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mesalazin"
              },
              {
                "language" : "fr-CH",
                "value" : "mésalazine"
              },
              {
                "language" : "it-CH",
                "value" : "Mesalazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mesalazin"
              },
              {
                "language" : "en-US",
                "value" : "Mesalazine"
              }
            ]
          },
          {
            "code" : "386922000",
            "display" : "Mesna (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mesna"
              },
              {
                "language" : "fr-CH",
                "value" : "mesna"
              },
              {
                "language" : "it-CH",
                "value" : "Mesna"
              },
              {
                "language" : "rm-CH",
                "value" : "Mesna"
              },
              {
                "language" : "en-US",
                "value" : "Mesna"
              }
            ]
          },
          {
            "code" : "780831000",
            "display" : "Metamizole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Metamizol"
              },
              {
                "language" : "fr-CH",
                "value" : "métamizole"
              },
              {
                "language" : "it-CH",
                "value" : "Metamizolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Metamizol"
              },
              {
                "language" : "en-US",
                "value" : "Metamizole"
              }
            ]
          },
          {
            "code" : "372567009",
            "display" : "Metformin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Metformin"
              },
              {
                "language" : "fr-CH",
                "value" : "metformine"
              },
              {
                "language" : "it-CH",
                "value" : "Metformina"
              },
              {
                "language" : "rm-CH",
                "value" : "Metformin"
              },
              {
                "language" : "en-US",
                "value" : "Metformin"
              }
            ]
          },
          {
            "code" : "387286002",
            "display" : "Methadone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methadon"
              },
              {
                "language" : "fr-CH",
                "value" : "méthadone"
              },
              {
                "language" : "it-CH",
                "value" : "Metadone"
              },
              {
                "language" : "rm-CH",
                "value" : "Methadon"
              },
              {
                "language" : "en-US",
                "value" : "Methadone"
              }
            ]
          },
          {
            "code" : "70288006",
            "display" : "Methionine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methionin"
              },
              {
                "language" : "fr-CH",
                "value" : "méthionine"
              },
              {
                "language" : "it-CH",
                "value" : "Metionina"
              },
              {
                "language" : "rm-CH",
                "value" : "Methionin"
              },
              {
                "language" : "en-US",
                "value" : "Methionine"
              }
            ]
          },
          {
            "code" : "387381009",
            "display" : "Methotrexate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methotrexat"
              },
              {
                "language" : "fr-CH",
                "value" : "méthotrexate"
              },
              {
                "language" : "it-CH",
                "value" : "Metotrexato"
              },
              {
                "language" : "rm-CH",
                "value" : "Methotrexat"
              },
              {
                "language" : "en-US",
                "value" : "Methotrexate"
              }
            ]
          },
          {
            "code" : "41062004",
            "display" : "Methoxsalen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methoxsalen"
              },
              {
                "language" : "fr-CH",
                "value" : "méthoxsalène"
              },
              {
                "language" : "it-CH",
                "value" : "Metoxsalene"
              },
              {
                "language" : "rm-CH",
                "value" : "Methoxsalen"
              },
              {
                "language" : "en-US",
                "value" : "Methoxsalen"
              }
            ]
          },
          {
            "code" : "425913002",
            "display" : "Methoxy polyethylene glycol-epoetin beta (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "PEG-Epoetin beta"
              },
              {
                "language" : "fr-CH",
                "value" : "époétine bêta pégylée"
              },
              {
                "language" : "it-CH",
                "value" : "Metossipolietilenglicole-epoetina beta"
              },
              {
                "language" : "rm-CH",
                "value" : "PEG-Epoetin beta"
              },
              {
                "language" : "en-US",
                "value" : "Methoxy polyethylene glycol-epoetin beta"
              }
            ]
          },
          {
            "code" : "768043006",
            "display" : "Methyldopa anhydrous (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methyldopa"
              },
              {
                "language" : "fr-CH",
                "value" : "méthyldopa"
              },
              {
                "language" : "it-CH",
                "value" : "Metildopa"
              },
              {
                "language" : "rm-CH",
                "value" : "Methyldopa"
              },
              {
                "language" : "en-US",
                "value" : "Methyldopa anhydrous"
              }
            ]
          },
          {
            "code" : "6725000",
            "display" : "Methylene blue stain (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methylthioninium chlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "méthylthionine chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Metiltioninio cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Methylthioninium chlorid"
              },
              {
                "language" : "en-US",
                "value" : "Methylene blue stain"
              }
            ]
          },
          {
            "code" : "126074008",
            "display" : "Methylergometrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methylergometrin"
              },
              {
                "language" : "fr-CH",
                "value" : "méthylergométrine"
              },
              {
                "language" : "it-CH",
                "value" : "Metilergometrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Methylergometrin"
              },
              {
                "language" : "en-US",
                "value" : "Methylergometrine"
              }
            ]
          },
          {
            "code" : "373337007",
            "display" : "Methylphenidate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methylphenidat"
              },
              {
                "language" : "fr-CH",
                "value" : "méthylphénidate"
              },
              {
                "language" : "it-CH",
                "value" : "Metilfenidato"
              },
              {
                "language" : "rm-CH",
                "value" : "Methylphenidat"
              },
              {
                "language" : "en-US",
                "value" : "Methylphenidate"
              }
            ]
          },
          {
            "code" : "116593003",
            "display" : "Methylprednisolone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Methylprednisolon"
              },
              {
                "language" : "fr-CH",
                "value" : "méthylprednisolone"
              },
              {
                "language" : "it-CH",
                "value" : "Metilprednisolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Methylprednisolon"
              },
              {
                "language" : "en-US",
                "value" : "Methylprednisolone"
              }
            ]
          },
          {
            "code" : "372776000",
            "display" : "Metoclopramide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Metoclopramid"
              },
              {
                "language" : "fr-CH",
                "value" : "métoclopramide"
              },
              {
                "language" : "it-CH",
                "value" : "Metoclopramide"
              },
              {
                "language" : "rm-CH",
                "value" : "Metoclopramid"
              },
              {
                "language" : "en-US",
                "value" : "Metoclopramide"
              }
            ]
          },
          {
            "code" : "387123003",
            "display" : "Metolazone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Metolazon"
              },
              {
                "language" : "fr-CH",
                "value" : "métolazone"
              },
              {
                "language" : "it-CH",
                "value" : "Metolazone"
              },
              {
                "language" : "rm-CH",
                "value" : "Metolazon"
              },
              {
                "language" : "en-US",
                "value" : "Metolazone"
              }
            ]
          },
          {
            "code" : "372826007",
            "display" : "Metoprolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Metoprolol"
              },
              {
                "language" : "fr-CH",
                "value" : "métoprolol"
              },
              {
                "language" : "it-CH",
                "value" : "Metoprololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Metoprolol"
              },
              {
                "language" : "en-US",
                "value" : "Metoprolol"
              }
            ]
          },
          {
            "code" : "372602008",
            "display" : "Metronidazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Metronidazol"
              },
              {
                "language" : "fr-CH",
                "value" : "métronidazole"
              },
              {
                "language" : "it-CH",
                "value" : "Metronidazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Metronidazol"
              },
              {
                "language" : "en-US",
                "value" : "Metronidazole"
              }
            ]
          },
          {
            "code" : "395795008",
            "display" : "Mianserin hydrochloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mianserin hydrochlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "miansérine chlorhydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Mianserina HCL"
              },
              {
                "language" : "rm-CH",
                "value" : "Mianserin hydrochlorid"
              },
              {
                "language" : "en-US",
                "value" : "Mianserin hydrochloride"
              }
            ]
          },
          {
            "code" : "372738006",
            "display" : "Miconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Miconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "miconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Miconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Miconazol"
              },
              {
                "language" : "en-US",
                "value" : "Miconazole"
              }
            ]
          },
          {
            "code" : "373476007",
            "display" : "Midazolam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Midazolam"
              },
              {
                "language" : "fr-CH",
                "value" : "midazolam"
              },
              {
                "language" : "it-CH",
                "value" : "Midazolam"
              },
              {
                "language" : "rm-CH",
                "value" : "Midazolam"
              },
              {
                "language" : "en-US",
                "value" : "Midazolam"
              }
            ]
          },
          {
            "code" : "372504000",
            "display" : "Midodrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Midodrin"
              },
              {
                "language" : "fr-CH",
                "value" : "midodrine"
              },
              {
                "language" : "it-CH",
                "value" : "Midodrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Midodrin"
              },
              {
                "language" : "en-US",
                "value" : "Midodrine"
              }
            ]
          },
          {
            "code" : "395796009",
            "display" : "Mifepristone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mifepriston"
              },
              {
                "language" : "fr-CH",
                "value" : "mifépristone"
              },
              {
                "language" : "it-CH",
                "value" : "Miferpristone"
              },
              {
                "language" : "rm-CH",
                "value" : "Mifepriston"
              },
              {
                "language" : "en-US",
                "value" : "Mifepristone"
              }
            ]
          },
          {
            "code" : "373441005",
            "display" : "Milrinone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Milrinon"
              },
              {
                "language" : "fr-CH",
                "value" : "milrinone"
              },
              {
                "language" : "it-CH",
                "value" : "Milrinone"
              },
              {
                "language" : "rm-CH",
                "value" : "Milrinon"
              },
              {
                "language" : "en-US",
                "value" : "Milrinone"
              }
            ]
          },
          {
            "code" : "372653009",
            "display" : "Minocycline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Minocyclin"
              },
              {
                "language" : "fr-CH",
                "value" : "minocycline"
              },
              {
                "language" : "it-CH",
                "value" : "Minociclina"
              },
              {
                "language" : "rm-CH",
                "value" : "Minocyclin"
              },
              {
                "language" : "en-US",
                "value" : "Minocycline"
              }
            ]
          },
          {
            "code" : "387272001",
            "display" : "Minoxidil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Minoxidil"
              },
              {
                "language" : "fr-CH",
                "value" : "minoxidil"
              },
              {
                "language" : "it-CH",
                "value" : "Minoxidil"
              },
              {
                "language" : "rm-CH",
                "value" : "Minoxidil"
              },
              {
                "language" : "en-US",
                "value" : "Minoxidil"
              }
            ]
          },
          {
            "code" : "703803006",
            "display" : "Mirabegron (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mirabegron"
              },
              {
                "language" : "fr-CH",
                "value" : "mirabégron"
              },
              {
                "language" : "it-CH",
                "value" : "Mirabegron"
              },
              {
                "language" : "rm-CH",
                "value" : "Mirabegron"
              },
              {
                "language" : "en-US",
                "value" : "Mirabegron"
              }
            ]
          },
          {
            "code" : "386847004",
            "display" : "Mirtazapine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mirtazapin"
              },
              {
                "language" : "fr-CH",
                "value" : "mirtazapine"
              },
              {
                "language" : "it-CH",
                "value" : "Mirtazapina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mirtazapin"
              },
              {
                "language" : "en-US",
                "value" : "Mirtazapine"
              }
            ]
          },
          {
            "code" : "387242007",
            "display" : "Misoprostol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Misoprostol"
              },
              {
                "language" : "fr-CH",
                "value" : "misoprostol"
              },
              {
                "language" : "it-CH",
                "value" : "Misoprostolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Misoprostol"
              },
              {
                "language" : "en-US",
                "value" : "Misoprostol"
              }
            ]
          },
          {
            "code" : "387331000",
            "display" : "Mitomycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mitomycin"
              },
              {
                "language" : "fr-CH",
                "value" : "mitomycine"
              },
              {
                "language" : "it-CH",
                "value" : "Mitomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mitomycin"
              },
              {
                "language" : "en-US",
                "value" : "Mitomycin"
              }
            ]
          },
          {
            "code" : "386913001",
            "display" : "Mitoxantrone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mitoxantron"
              },
              {
                "language" : "fr-CH",
                "value" : "mitoxantrone"
              },
              {
                "language" : "it-CH",
                "value" : "Mitoxantrone"
              },
              {
                "language" : "rm-CH",
                "value" : "Mitoxantron"
              },
              {
                "language" : "en-US",
                "value" : "Mitoxantrone"
              }
            ]
          },
          {
            "code" : "108447000",
            "display" : "Mivacurium chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mivacurium chlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "mivacurium chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Mivacurio cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Mivacurium chlorid"
              },
              {
                "language" : "en-US",
                "value" : "Mivacurium chloride"
              }
            ]
          },
          {
            "code" : "395800003",
            "display" : "Moclobemide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Moclobemid"
              },
              {
                "language" : "fr-CH",
                "value" : "moclobémide"
              },
              {
                "language" : "it-CH",
                "value" : "Moclobemide"
              },
              {
                "language" : "rm-CH",
                "value" : "Moclobemid"
              },
              {
                "language" : "en-US",
                "value" : "Moclobemide"
              }
            ]
          },
          {
            "code" : "387004007",
            "display" : "Modafinil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Modafinil"
              },
              {
                "language" : "fr-CH",
                "value" : "modafinil"
              },
              {
                "language" : "it-CH",
                "value" : "Modafinil"
              },
              {
                "language" : "rm-CH",
                "value" : "Modafinil"
              },
              {
                "language" : "en-US",
                "value" : "Modafinil"
              }
            ]
          },
          {
            "code" : "698196008",
            "display" : "Molsidomine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Molsidomin"
              },
              {
                "language" : "fr-CH",
                "value" : "molsidomine"
              },
              {
                "language" : "it-CH",
                "value" : "Molsidomina"
              },
              {
                "language" : "rm-CH",
                "value" : "Molsidomin"
              },
              {
                "language" : "en-US",
                "value" : "Molsidomine"
              }
            ]
          },
          {
            "code" : "395990009",
            "display" : "Mometasone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mometason"
              },
              {
                "language" : "fr-CH",
                "value" : "mométasone"
              },
              {
                "language" : "it-CH",
                "value" : "Mometasone"
              },
              {
                "language" : "rm-CH",
                "value" : "Mometason"
              },
              {
                "language" : "en-US",
                "value" : "Mometasone"
              }
            ]
          },
          {
            "code" : "373728005",
            "display" : "Montelukast (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Montelukast"
              },
              {
                "language" : "fr-CH",
                "value" : "montélukast"
              },
              {
                "language" : "it-CH",
                "value" : "Montelukast"
              },
              {
                "language" : "rm-CH",
                "value" : "Montelukast"
              },
              {
                "language" : "en-US",
                "value" : "Montelukast"
              }
            ]
          },
          {
            "code" : "441764007",
            "display" : "Moroctocog alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Moroctocog alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "moroctocog alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Moroctocog alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Moroctocog alfa"
              },
              {
                "language" : "en-US",
                "value" : "Moroctocog alfa"
              }
            ]
          },
          {
            "code" : "373529000",
            "display" : "Morphine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Morphin"
              },
              {
                "language" : "fr-CH",
                "value" : "morphine"
              },
              {
                "language" : "it-CH",
                "value" : "Morfina"
              },
              {
                "language" : "rm-CH",
                "value" : "Morphin"
              },
              {
                "language" : "en-US",
                "value" : "Morphine"
              }
            ]
          },
          {
            "code" : "412439003",
            "display" : "Moxifloxacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Moxifloxacin"
              },
              {
                "language" : "fr-CH",
                "value" : "moxifloxacine"
              },
              {
                "language" : "it-CH",
                "value" : "Moxifloxacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Moxifloxacin"
              },
              {
                "language" : "en-US",
                "value" : "Moxifloxacin"
              }
            ]
          },
          {
            "code" : "395805008",
            "display" : "Moxonidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Moxonidin"
              },
              {
                "language" : "fr-CH",
                "value" : "moxonidine"
              },
              {
                "language" : "it-CH",
                "value" : "Moxonidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Moxonidin"
              },
              {
                "language" : "en-US",
                "value" : "Moxonidine"
              }
            ]
          },
          {
            "code" : "387397004",
            "display" : "Mupirocin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mupirocin"
              },
              {
                "language" : "fr-CH",
                "value" : "mupirocine"
              },
              {
                "language" : "it-CH",
                "value" : "Mupirocina"
              },
              {
                "language" : "rm-CH",
                "value" : "Mupirocin"
              },
              {
                "language" : "en-US",
                "value" : "Mupirocin"
              }
            ]
          },
          {
            "code" : "386976000",
            "display" : "Mycophenolate mofetil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mycophenolat mofetil"
              },
              {
                "language" : "fr-CH",
                "value" : "mycophénolate mofétil"
              },
              {
                "language" : "it-CH",
                "value" : "Micofenolato mofetile"
              },
              {
                "language" : "rm-CH",
                "value" : "Mycophenolat mofetil"
              },
              {
                "language" : "en-US",
                "value" : "Mycophenolate mofetil"
              }
            ]
          },
          {
            "code" : "409330005",
            "display" : "Mycophenolic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mycophenolsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide mycophénolique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido micofenolico"
              },
              {
                "language" : "rm-CH",
                "value" : "Mycophenolsäure"
              },
              {
                "language" : "en-US",
                "value" : "Mycophenolic acid"
              }
            ]
          },
          {
            "code" : "387482003",
            "display" : "Nadolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nadolol"
              },
              {
                "language" : "fr-CH",
                "value" : "nadolol"
              },
              {
                "language" : "it-CH",
                "value" : "Nadololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Nadolol"
              },
              {
                "language" : "en-US",
                "value" : "Nadolol"
              }
            ]
          },
          {
            "code" : "698278006",
            "display" : "Nadroparin calcium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nadroparin calcium"
              },
              {
                "language" : "fr-CH",
                "value" : "nadroparine calcique"
              },
              {
                "language" : "it-CH",
                "value" : "Nadroparina calcica"
              },
              {
                "language" : "rm-CH",
                "value" : "Nadroparin calcium"
              },
              {
                "language" : "en-US",
                "value" : "Nadroparin calcium"
              }
            ]
          },
          {
            "code" : "699946002",
            "display" : "Nadroparine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nadroparin"
              },
              {
                "language" : "fr-CH",
                "value" : "nadroparine"
              },
              {
                "language" : "it-CH",
                "value" : "Nadroparina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nadroparin"
              },
              {
                "language" : "en-US",
                "value" : "Nadroparine"
              }
            ]
          },
          {
            "code" : "713428001",
            "display" : "Naftazone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naftazon"
              },
              {
                "language" : "fr-CH",
                "value" : "naftazone"
              },
              {
                "language" : "it-CH",
                "value" : "Naftazone"
              },
              {
                "language" : "rm-CH",
                "value" : "Naftazon"
              },
              {
                "language" : "en-US",
                "value" : "Naftazone"
              }
            ]
          },
          {
            "code" : "395992001",
            "display" : "Naftidrofuryl (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naftidrofuryl"
              },
              {
                "language" : "fr-CH",
                "value" : "naftidrofuryl"
              },
              {
                "language" : "it-CH",
                "value" : "Naftidrofurile"
              },
              {
                "language" : "rm-CH",
                "value" : "Naftidrofuryl"
              },
              {
                "language" : "en-US",
                "value" : "Naftidrofuryl"
              }
            ]
          },
          {
            "code" : "109098006",
            "display" : "Nalmefene (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nalmefen"
              },
              {
                "language" : "fr-CH",
                "value" : "nalméfène"
              },
              {
                "language" : "it-CH",
                "value" : "Nalmefene"
              },
              {
                "language" : "rm-CH",
                "value" : "Nalmefen"
              },
              {
                "language" : "en-US",
                "value" : "Nalmefene"
              }
            ]
          },
          {
            "code" : "372890007",
            "display" : "Naloxone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naloxon"
              },
              {
                "language" : "fr-CH",
                "value" : "naloxone"
              },
              {
                "language" : "it-CH",
                "value" : "Naloxone"
              },
              {
                "language" : "rm-CH",
                "value" : "Naloxon"
              },
              {
                "language" : "en-US",
                "value" : "Naloxone"
              }
            ]
          },
          {
            "code" : "373546002",
            "display" : "Naltrexone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naltrexon"
              },
              {
                "language" : "fr-CH",
                "value" : "naltrexone"
              },
              {
                "language" : "it-CH",
                "value" : "Naltrexone"
              },
              {
                "language" : "rm-CH",
                "value" : "Naltrexon"
              },
              {
                "language" : "en-US",
                "value" : "Naltrexone"
              }
            ]
          },
          {
            "code" : "372803000",
            "display" : "Naphazoline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naphazolin"
              },
              {
                "language" : "fr-CH",
                "value" : "naphazoline"
              },
              {
                "language" : "it-CH",
                "value" : "Nafazolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Naphazolin"
              },
              {
                "language" : "en-US",
                "value" : "Naphazoline"
              }
            ]
          },
          {
            "code" : "372588000",
            "display" : "Naproxen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naproxen"
              },
              {
                "language" : "fr-CH",
                "value" : "naproxène"
              },
              {
                "language" : "it-CH",
                "value" : "Naprossene"
              },
              {
                "language" : "rm-CH",
                "value" : "Naproxen"
              },
              {
                "language" : "en-US",
                "value" : "Naproxen"
              }
            ]
          },
          {
            "code" : "363571003",
            "display" : "Naratriptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Naratriptan"
              },
              {
                "language" : "fr-CH",
                "value" : "naratriptan"
              },
              {
                "language" : "it-CH",
                "value" : "Naratriptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Naratriptan"
              },
              {
                "language" : "en-US",
                "value" : "Naratriptan"
              }
            ]
          },
          {
            "code" : "414805007",
            "display" : "Natalizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natalizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "natalizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Natalizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Natalizumab"
              },
              {
                "language" : "en-US",
                "value" : "Natalizumab"
              }
            ]
          },
          {
            "code" : "387070004",
            "display" : "Nateglinide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nateglinid"
              },
              {
                "language" : "fr-CH",
                "value" : "natéglinide"
              },
              {
                "language" : "it-CH",
                "value" : "Nateglinide"
              },
              {
                "language" : "rm-CH",
                "value" : "Nateglinid"
              },
              {
                "language" : "en-US",
                "value" : "Nateglinide"
              }
            ]
          },
          {
            "code" : "395808005",
            "display" : "Nebivolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nebivolol"
              },
              {
                "language" : "fr-CH",
                "value" : "nébivolol"
              },
              {
                "language" : "it-CH",
                "value" : "Nebivololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Nebivolol"
              },
              {
                "language" : "en-US",
                "value" : "Nebivolol"
              }
            ]
          },
          {
            "code" : "373445001",
            "display" : "Nelfinavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nelfinavir"
              },
              {
                "language" : "fr-CH",
                "value" : "nelfinavir"
              },
              {
                "language" : "it-CH",
                "value" : "Nelfinavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Nelfinavir"
              },
              {
                "language" : "en-US",
                "value" : "Nelfinavir"
              }
            ]
          },
          {
            "code" : "373528008",
            "display" : "Neomycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Neomycin"
              },
              {
                "language" : "fr-CH",
                "value" : "néomycine"
              },
              {
                "language" : "it-CH",
                "value" : "Neomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Neomycin"
              },
              {
                "language" : "en-US",
                "value" : "Neomycin"
              }
            ]
          },
          {
            "code" : "373346001",
            "display" : "Neostigmine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Neostigmin"
              },
              {
                "language" : "fr-CH",
                "value" : "néostigmine"
              },
              {
                "language" : "it-CH",
                "value" : "Neostigmina"
              },
              {
                "language" : "rm-CH",
                "value" : "Neostigmin"
              },
              {
                "language" : "en-US",
                "value" : "Neostigmine"
              }
            ]
          },
          {
            "code" : "386898005",
            "display" : "Nevirapine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nevirapin"
              },
              {
                "language" : "fr-CH",
                "value" : "névirapine"
              },
              {
                "language" : "it-CH",
                "value" : "Nevirapina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nevirapin"
              },
              {
                "language" : "en-US",
                "value" : "Nevirapine"
              }
            ]
          },
          {
            "code" : "372502001",
            "display" : "Nicardipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nicardipin"
              },
              {
                "language" : "fr-CH",
                "value" : "nicardipine"
              },
              {
                "language" : "it-CH",
                "value" : "Nicardipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nicardipin"
              },
              {
                "language" : "en-US",
                "value" : "Nicardipine"
              }
            ]
          },
          {
            "code" : "395809002",
            "display" : "Nicorandil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nicorandil"
              },
              {
                "language" : "fr-CH",
                "value" : "nicorandil"
              },
              {
                "language" : "it-CH",
                "value" : "Nicorandil"
              },
              {
                "language" : "rm-CH",
                "value" : "Nicorandil"
              },
              {
                "language" : "en-US",
                "value" : "Nicorandil"
              }
            ]
          },
          {
            "code" : "173196005",
            "display" : "Nicotinamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nicotinamid"
              },
              {
                "language" : "fr-CH",
                "value" : "nicotinamide"
              },
              {
                "language" : "it-CH",
                "value" : "Nicotinamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Nicotinamid"
              },
              {
                "language" : "en-US",
                "value" : "Nicotinamide"
              }
            ]
          },
          {
            "code" : "68540007",
            "display" : "Nicotine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nicotin"
              },
              {
                "language" : "fr-CH",
                "value" : "nicotine"
              },
              {
                "language" : "it-CH",
                "value" : "Nicotina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nicotin"
              },
              {
                "language" : "en-US",
                "value" : "Nicotine"
              }
            ]
          },
          {
            "code" : "387490003",
            "display" : "Nifedipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nifedipin"
              },
              {
                "language" : "fr-CH",
                "value" : "nifédipine"
              },
              {
                "language" : "it-CH",
                "value" : "Nifedipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nifedipin"
              },
              {
                "language" : "en-US",
                "value" : "Nifedipine"
              }
            ]
          },
          {
            "code" : "703479000",
            "display" : "Nimesulide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nimesulid"
              },
              {
                "language" : "fr-CH",
                "value" : "nimésulide"
              },
              {
                "language" : "it-CH",
                "value" : "Nimesulide"
              },
              {
                "language" : "rm-CH",
                "value" : "Nimesulid"
              },
              {
                "language" : "en-US",
                "value" : "Nimesulide"
              }
            ]
          },
          {
            "code" : "387502003",
            "display" : "Nimodipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nimodipin"
              },
              {
                "language" : "fr-CH",
                "value" : "nimodipine"
              },
              {
                "language" : "it-CH",
                "value" : "Nimodipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nimodipin"
              },
              {
                "language" : "en-US",
                "value" : "Nimodipine"
              }
            ]
          },
          {
            "code" : "712494002",
            "display" : "Nintedanib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nintedanib"
              },
              {
                "language" : "fr-CH",
                "value" : "nintédanib"
              },
              {
                "language" : "it-CH",
                "value" : "Nintedanib"
              },
              {
                "language" : "rm-CH",
                "value" : "Nintedanib"
              },
              {
                "language" : "en-US",
                "value" : "Nintedanib"
              }
            ]
          },
          {
            "code" : "407148001",
            "display" : "Nitazoxanide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nitazoxanid"
              },
              {
                "language" : "fr-CH",
                "value" : "nitazoxanide"
              },
              {
                "language" : "it-CH",
                "value" : "Nitazoxanide"
              },
              {
                "language" : "rm-CH",
                "value" : "Nitazoxanid"
              },
              {
                "language" : "en-US",
                "value" : "Nitazoxanide"
              }
            ]
          },
          {
            "code" : "385996000",
            "display" : "Nitisinone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nitisinon"
              },
              {
                "language" : "fr-CH",
                "value" : "nitisinone"
              },
              {
                "language" : "it-CH",
                "value" : "Nitisinone"
              },
              {
                "language" : "rm-CH",
                "value" : "Nitisinon"
              },
              {
                "language" : "en-US",
                "value" : "Nitisinone"
              }
            ]
          },
          {
            "code" : "387449001",
            "display" : "Nitrazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nitrazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "nitrazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Nitrazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Nitrazepam"
              },
              {
                "language" : "en-US",
                "value" : "Nitrazepam"
              }
            ]
          },
          {
            "code" : "444757009",
            "display" : "Nitrendipine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nitrendipin"
              },
              {
                "language" : "fr-CH",
                "value" : "nitrendipine"
              },
              {
                "language" : "it-CH",
                "value" : "Nitrendipina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nitrendipin"
              },
              {
                "language" : "en-US",
                "value" : "Nitrendipine"
              }
            ]
          },
          {
            "code" : "373543005",
            "display" : "Nitrofurantoin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nitrofurantoin"
              },
              {
                "language" : "fr-CH",
                "value" : "nitrofurantoïne"
              },
              {
                "language" : "it-CH",
                "value" : "Nitrofurantoina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nitrofurantoin"
              },
              {
                "language" : "en-US",
                "value" : "Nitrofurantoin"
              }
            ]
          },
          {
            "code" : "704191007",
            "display" : "Nivolumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nivolumab"
              },
              {
                "language" : "fr-CH",
                "value" : "nivolumab"
              },
              {
                "language" : "it-CH",
                "value" : "Nivolumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Nivolumab"
              },
              {
                "language" : "en-US",
                "value" : "Nivolumab"
              }
            ]
          },
          {
            "code" : "698277001",
            "display" : "Nomegestrol acetate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nomegestrol acetat"
              },
              {
                "language" : "fr-CH",
                "value" : "nomégestrol acétate"
              },
              {
                "language" : "it-CH",
                "value" : "Nomegestrolo acetato"
              },
              {
                "language" : "rm-CH",
                "value" : "Nomegestrol acetat"
              },
              {
                "language" : "en-US",
                "value" : "Nomegestrol acetate"
              }
            ]
          },
          {
            "code" : "45555007",
            "display" : "Norepinephrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Noradrenalin (Norepinephrin)"
              },
              {
                "language" : "fr-CH",
                "value" : "noradrénaline (norépinéphrine)"
              },
              {
                "language" : "it-CH",
                "value" : "Noradrenalina (norepinefrina)"
              },
              {
                "language" : "rm-CH",
                "value" : "Noradrenalin (Norepinephrin)"
              },
              {
                "language" : "en-US",
                "value" : "Norepinephrine"
              }
            ]
          },
          {
            "code" : "126102009",
            "display" : "Norethisterone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Norethisteron"
              },
              {
                "language" : "fr-CH",
                "value" : "noréthistérone"
              },
              {
                "language" : "it-CH",
                "value" : "Noretisterone"
              },
              {
                "language" : "rm-CH",
                "value" : "Norethisteron"
              },
              {
                "language" : "en-US",
                "value" : "Norethisterone"
              }
            ]
          },
          {
            "code" : "387271008",
            "display" : "Norfloxacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Norfloxacin"
              },
              {
                "language" : "fr-CH",
                "value" : "norfloxacine"
              },
              {
                "language" : "it-CH",
                "value" : "Norfloxacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Norfloxacin"
              },
              {
                "language" : "en-US",
                "value" : "Norfloxacin"
              }
            ]
          },
          {
            "code" : "126115000",
            "display" : "Norgestimate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Norgestimat"
              },
              {
                "language" : "fr-CH",
                "value" : "norgestimate"
              },
              {
                "language" : "it-CH",
                "value" : "Norgestimato"
              },
              {
                "language" : "rm-CH",
                "value" : "Norgestimat"
              },
              {
                "language" : "en-US",
                "value" : "Norgestimate"
              }
            ]
          },
          {
            "code" : "126106007",
            "display" : "Norgestrel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Norgestrel"
              },
              {
                "language" : "fr-CH",
                "value" : "norgestrel"
              },
              {
                "language" : "it-CH",
                "value" : "Norgestrel"
              },
              {
                "language" : "rm-CH",
                "value" : "Norgestrel"
              },
              {
                "language" : "en-US",
                "value" : "Norgestrel"
              }
            ]
          },
          {
            "code" : "713355009",
            "display" : "Normal immunoglobulin human (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Immunglobulin vom Menschen"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline humaine normale"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina umana normale"
              },
              {
                "language" : "rm-CH",
                "value" : "Immunglobulin vom Menschen"
              },
              {
                "language" : "en-US",
                "value" : "Normal immunoglobulin human"
              }
            ]
          },
          {
            "code" : "372652004",
            "display" : "Nortriptyline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nortriptylin"
              },
              {
                "language" : "fr-CH",
                "value" : "nortriptyline"
              },
              {
                "language" : "it-CH",
                "value" : "Nortriptilina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nortriptylin"
              },
              {
                "language" : "en-US",
                "value" : "Nortriptyline"
              }
            ]
          },
          {
            "code" : "387437002",
            "display" : "Noscapine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Noscapin"
              },
              {
                "language" : "fr-CH",
                "value" : "noscapine"
              },
              {
                "language" : "it-CH",
                "value" : "Noscapina"
              },
              {
                "language" : "rm-CH",
                "value" : "Noscapin"
              },
              {
                "language" : "en-US",
                "value" : "Noscapine"
              }
            ]
          },
          {
            "code" : "387048002",
            "display" : "Nystatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nystatin"
              },
              {
                "language" : "fr-CH",
                "value" : "nystatine"
              },
              {
                "language" : "it-CH",
                "value" : "Nistatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Nystatin"
              },
              {
                "language" : "en-US",
                "value" : "Nystatin"
              }
            ]
          },
          {
            "code" : "720257002",
            "display" : "Obeticholic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Obeticholsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide obéticholique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido obeticolico"
              },
              {
                "language" : "rm-CH",
                "value" : "Obeticholsäure"
              },
              {
                "language" : "en-US",
                "value" : "Obeticholic acid"
              }
            ]
          },
          {
            "code" : "710287009",
            "display" : "Obinutuzumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Obinutuzumab"
              },
              {
                "language" : "fr-CH",
                "value" : "obinutuzumab"
              },
              {
                "language" : "it-CH",
                "value" : "Obinutuzumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Obinutuzumab"
              },
              {
                "language" : "en-US",
                "value" : "Obinutuzumab"
              }
            ]
          },
          {
            "code" : "733464008",
            "display" : "Ocrelizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ocrelizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "ocrélizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Ocrelizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Ocrelizumab"
              },
              {
                "language" : "en-US",
                "value" : "Ocrelizumab"
              }
            ]
          },
          {
            "code" : "430477008",
            "display" : "Octenidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Octenidin"
              },
              {
                "language" : "fr-CH",
                "value" : "octénidine"
              },
              {
                "language" : "it-CH",
                "value" : "Octenidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Octenidin"
              },
              {
                "language" : "en-US",
                "value" : "Octenidine"
              }
            ]
          },
          {
            "code" : "418888003",
            "display" : "Octocog alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Octocog alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "octocog alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Octocog alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Octocog alfa"
              },
              {
                "language" : "en-US",
                "value" : "Octocog alfa"
              }
            ]
          },
          {
            "code" : "109053000",
            "display" : "Octreotide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Octreotid"
              },
              {
                "language" : "fr-CH",
                "value" : "octréotide"
              },
              {
                "language" : "it-CH",
                "value" : "Octreotide"
              },
              {
                "language" : "rm-CH",
                "value" : "Octreotid"
              },
              {
                "language" : "en-US",
                "value" : "Octreotide"
              }
            ]
          },
          {
            "code" : "387551000",
            "display" : "Ofloxacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ofloxacin"
              },
              {
                "language" : "fr-CH",
                "value" : "ofloxacine"
              },
              {
                "language" : "it-CH",
                "value" : "Ofloxacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ofloxacin"
              },
              {
                "language" : "en-US",
                "value" : "Ofloxacin"
              }
            ]
          },
          {
            "code" : "386849001",
            "display" : "Olanzapine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Olanzapin"
              },
              {
                "language" : "fr-CH",
                "value" : "olanzapine"
              },
              {
                "language" : "it-CH",
                "value" : "Olanzapina"
              },
              {
                "language" : "rm-CH",
                "value" : "Olanzapin"
              },
              {
                "language" : "en-US",
                "value" : "Olanzapine"
              }
            ]
          },
          {
            "code" : "725800004",
            "display" : "Olanzapine embonate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Olanzapin embonat-1-Wasser"
              },
              {
                "language" : "fr-CH",
                "value" : "olanzapine embonate"
              },
              {
                "language" : "it-CH",
                "value" : "Olanzapina embonato"
              },
              {
                "language" : "rm-CH",
                "value" : "Olanzapin embonat-1-Wasser"
              },
              {
                "language" : "en-US",
                "value" : "Olanzapine embonate"
              }
            ]
          },
          {
            "code" : "41834005",
            "display" : "Olive oil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Olivenöl"
              },
              {
                "language" : "fr-CH",
                "value" : "olive huile"
              },
              {
                "language" : "it-CH",
                "value" : "Oliva olio"
              },
              {
                "language" : "rm-CH",
                "value" : "Olivenöl"
              },
              {
                "language" : "en-US",
                "value" : "Olive oil"
              }
            ]
          },
          {
            "code" : "412259001",
            "display" : "Olmesartan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Olmesartan"
              },
              {
                "language" : "fr-CH",
                "value" : "olmésartan"
              },
              {
                "language" : "it-CH",
                "value" : "Olmesartan"
              },
              {
                "language" : "rm-CH",
                "value" : "Olmesartan"
              },
              {
                "language" : "en-US",
                "value" : "Olmesartan"
              }
            ]
          },
          {
            "code" : "704459002",
            "display" : "Olodaterol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Olodaterol"
              },
              {
                "language" : "fr-CH",
                "value" : "olodatérol"
              },
              {
                "language" : "it-CH",
                "value" : "Olodaterolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Olodaterol"
              },
              {
                "language" : "en-US",
                "value" : "Olodaterol"
              }
            ]
          },
          {
            "code" : "406443008",
            "display" : "Omalizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Omalizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "omalizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Omalizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Omalizumab"
              },
              {
                "language" : "en-US",
                "value" : "Omalizumab"
              }
            ]
          },
          {
            "code" : "226365003",
            "display" : "Omega 3 fatty acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Omega-3-Fettsäuren"
              },
              {
                "language" : "fr-CH",
                "value" : "acides gras oméga-3"
              },
              {
                "language" : "it-CH",
                "value" : "Acidi grassi omega 3"
              },
              {
                "language" : "rm-CH",
                "value" : "Omega-3-Fettsäuren"
              },
              {
                "language" : "en-US",
                "value" : "Omega 3 fatty acid"
              }
            ]
          },
          {
            "code" : "387137007",
            "display" : "Omeprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Omeprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "oméprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Omeprazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Omeprazol"
              },
              {
                "language" : "en-US",
                "value" : "Omeprazole"
              }
            ]
          },
          {
            "code" : "372487007",
            "display" : "Ondansetron (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ondansetron"
              },
              {
                "language" : "fr-CH",
                "value" : "ondansétron"
              },
              {
                "language" : "it-CH",
                "value" : "Ondansetron"
              },
              {
                "language" : "rm-CH",
                "value" : "Ondansetron"
              },
              {
                "language" : "en-US",
                "value" : "Ondansetron"
              }
            ]
          },
          {
            "code" : "387007000",
            "display" : "Orlistat (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Orlistat"
              },
              {
                "language" : "fr-CH",
                "value" : "orlistat"
              },
              {
                "language" : "it-CH",
                "value" : "Orlistat"
              },
              {
                "language" : "rm-CH",
                "value" : "Orlistat"
              },
              {
                "language" : "en-US",
                "value" : "Orlistat"
              }
            ]
          },
          {
            "code" : "442924004",
            "display" : "Ornidazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ornidazol"
              },
              {
                "language" : "fr-CH",
                "value" : "ornidazole"
              },
              {
                "language" : "it-CH",
                "value" : "Ornidazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Ornidazol"
              },
              {
                "language" : "en-US",
                "value" : "Ornidazole"
              }
            ]
          },
          {
            "code" : "412261005",
            "display" : "Oseltamivir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oseltamivir"
              },
              {
                "language" : "fr-CH",
                "value" : "oseltamivir"
              },
              {
                "language" : "it-CH",
                "value" : "Oseltamivir"
              },
              {
                "language" : "rm-CH",
                "value" : "Oseltamivir"
              },
              {
                "language" : "en-US",
                "value" : "Oseltamivir"
              }
            ]
          },
          {
            "code" : "395814003",
            "display" : "Oxaliplatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxaliplatin"
              },
              {
                "language" : "fr-CH",
                "value" : "oxaliplatine"
              },
              {
                "language" : "it-CH",
                "value" : "Oxaliplatino"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxaliplatin"
              },
              {
                "language" : "en-US",
                "value" : "Oxaliplatin"
              }
            ]
          },
          {
            "code" : "126128007",
            "display" : "Oxandrolone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxandrolon"
              },
              {
                "language" : "fr-CH",
                "value" : "oxandrolone"
              },
              {
                "language" : "it-CH",
                "value" : "Oxandrolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxandrolon"
              },
              {
                "language" : "en-US",
                "value" : "Oxandrolone"
              }
            ]
          },
          {
            "code" : "387455006",
            "display" : "Oxazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "oxazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Oxazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxazepam"
              },
              {
                "language" : "en-US",
                "value" : "Oxazepam"
              }
            ]
          },
          {
            "code" : "387025007",
            "display" : "Oxcarbazepine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxcarbazepin"
              },
              {
                "language" : "fr-CH",
                "value" : "oxcarbazépine"
              },
              {
                "language" : "it-CH",
                "value" : "Oxcarbazepina"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxcarbazepin"
              },
              {
                "language" : "en-US",
                "value" : "Oxcarbazepine"
              }
            ]
          },
          {
            "code" : "772837001",
            "display" : "Oxomemazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxomemazin"
              },
              {
                "language" : "fr-CH",
                "value" : "oxomémazine"
              },
              {
                "language" : "it-CH",
                "value" : "Oxomemazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxomemazin"
              },
              {
                "language" : "en-US",
                "value" : "Oxomemazine"
              }
            ]
          },
          {
            "code" : "52140009",
            "display" : "Oxybuprocaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxybuprocain"
              },
              {
                "language" : "fr-CH",
                "value" : "oxybuprocaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Oxibuprocaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxybuprocain"
              },
              {
                "language" : "en-US",
                "value" : "Oxybuprocaine"
              }
            ]
          },
          {
            "code" : "372717000",
            "display" : "Oxybutynin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxybutynin"
              },
              {
                "language" : "fr-CH",
                "value" : "oxybutynine"
              },
              {
                "language" : "it-CH",
                "value" : "Ossibutinina"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxybutynin"
              },
              {
                "language" : "en-US",
                "value" : "Oxybutynin"
              }
            ]
          },
          {
            "code" : "55452001",
            "display" : "Oxycodone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxycodon"
              },
              {
                "language" : "fr-CH",
                "value" : "oxycodone"
              },
              {
                "language" : "it-CH",
                "value" : "Ossicodone"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxycodon"
              },
              {
                "language" : "en-US",
                "value" : "Oxycodone"
              }
            ]
          },
          {
            "code" : "387158001",
            "display" : "Oxymetazoline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxymetazolin"
              },
              {
                "language" : "fr-CH",
                "value" : "oxymétazoline"
              },
              {
                "language" : "it-CH",
                "value" : "Ossimetazolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxymetazolin"
              },
              {
                "language" : "en-US",
                "value" : "Oxymetazoline"
              }
            ]
          },
          {
            "code" : "372675006",
            "display" : "Oxytetracycline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxytetracyclin"
              },
              {
                "language" : "fr-CH",
                "value" : "oxytétracycline"
              },
              {
                "language" : "it-CH",
                "value" : "Ossitetraciclina"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxytetracyclin"
              },
              {
                "language" : "en-US",
                "value" : "Oxytetracycline"
              }
            ]
          },
          {
            "code" : "112115002",
            "display" : "Oxytocin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oxytocin"
              },
              {
                "language" : "fr-CH",
                "value" : "oxytocine"
              },
              {
                "language" : "it-CH",
                "value" : "Ossitocina"
              },
              {
                "language" : "rm-CH",
                "value" : "Oxytocin"
              },
              {
                "language" : "en-US",
                "value" : "Oxytocin"
              }
            ]
          },
          {
            "code" : "387374002",
            "display" : "Paclitaxel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Paclitaxel"
              },
              {
                "language" : "fr-CH",
                "value" : "paclitaxel"
              },
              {
                "language" : "it-CH",
                "value" : "Paclitaxel"
              },
              {
                "language" : "rm-CH",
                "value" : "Paclitaxel"
              },
              {
                "language" : "en-US",
                "value" : "Paclitaxel"
              }
            ]
          },
          {
            "code" : "426276000",
            "display" : "Paliperidone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Paliperidon"
              },
              {
                "language" : "fr-CH",
                "value" : "palipéridone"
              },
              {
                "language" : "it-CH",
                "value" : "Paliperidone"
              },
              {
                "language" : "rm-CH",
                "value" : "Paliperidon"
              },
              {
                "language" : "en-US",
                "value" : "Paliperidone"
              }
            ]
          },
          {
            "code" : "386900007",
            "display" : "Palivizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Palivizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "palivizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Palivizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Palivizumab"
              },
              {
                "language" : "en-US",
                "value" : "Palivizumab"
              }
            ]
          },
          {
            "code" : "404852008",
            "display" : "Palonosetron (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Palonosetron"
              },
              {
                "language" : "fr-CH",
                "value" : "palonosétron"
              },
              {
                "language" : "it-CH",
                "value" : "Palonosetron"
              },
              {
                "language" : "rm-CH",
                "value" : "Palonosetron"
              },
              {
                "language" : "en-US",
                "value" : "Palonosetron"
              }
            ]
          },
          {
            "code" : "373738000",
            "display" : "Pancuronium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pancuronium"
              },
              {
                "language" : "fr-CH",
                "value" : "pancuronium"
              },
              {
                "language" : "it-CH",
                "value" : "Pancuronio"
              },
              {
                "language" : "rm-CH",
                "value" : "Pancuronium"
              },
              {
                "language" : "en-US",
                "value" : "Pancuronium"
              }
            ]
          },
          {
            "code" : "395821003",
            "display" : "Pantoprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pantoprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "pantoprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Pantoprazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Pantoprazol"
              },
              {
                "language" : "en-US",
                "value" : "Pantoprazole"
              }
            ]
          },
          {
            "code" : "86431009",
            "display" : "Pantothenic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pantothensäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide pantothénique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido pantotenico"
              },
              {
                "language" : "rm-CH",
                "value" : "Pantothensäure"
              },
              {
                "language" : "en-US",
                "value" : "Pantothenic acid"
              }
            ]
          },
          {
            "code" : "372784001",
            "display" : "Papaverine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Papaverin"
              },
              {
                "language" : "fr-CH",
                "value" : "papavérine"
              },
              {
                "language" : "it-CH",
                "value" : "Papaverina"
              },
              {
                "language" : "rm-CH",
                "value" : "Papaverin"
              },
              {
                "language" : "en-US",
                "value" : "Papaverine"
              }
            ]
          },
          {
            "code" : "387517004",
            "display" : "Paracetamol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Paracetamol"
              },
              {
                "language" : "fr-CH",
                "value" : "paracétamol"
              },
              {
                "language" : "it-CH",
                "value" : "Paracetamolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Paracetamol"
              },
              {
                "language" : "en-US",
                "value" : "Paracetamol"
              }
            ]
          },
          {
            "code" : "255667006",
            "display" : "Paraffin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Paraffin"
              },
              {
                "language" : "fr-CH",
                "value" : "paraffine"
              },
              {
                "language" : "it-CH",
                "value" : "Paraffina"
              },
              {
                "language" : "rm-CH",
                "value" : "Paraffin"
              },
              {
                "language" : "en-US",
                "value" : "Paraffin"
              }
            ]
          },
          {
            "code" : "108946001",
            "display" : "Paricalcitol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Paricalcitol"
              },
              {
                "language" : "fr-CH",
                "value" : "paricalcitol"
              },
              {
                "language" : "it-CH",
                "value" : "Paracalcitolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Paricalcitol"
              },
              {
                "language" : "en-US",
                "value" : "Paricalcitol"
              }
            ]
          },
          {
            "code" : "372595009",
            "display" : "Paroxetine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Paroxetin"
              },
              {
                "language" : "fr-CH",
                "value" : "paroxétine"
              },
              {
                "language" : "it-CH",
                "value" : "Paroxetina"
              },
              {
                "language" : "rm-CH",
                "value" : "Paroxetin"
              },
              {
                "language" : "en-US",
                "value" : "Paroxetine"
              }
            ]
          },
          {
            "code" : "108814000",
            "display" : "Pegaspargase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pegaspargase"
              },
              {
                "language" : "fr-CH",
                "value" : "pégaspargase"
              },
              {
                "language" : "it-CH",
                "value" : "Pegaspargase"
              },
              {
                "language" : "rm-CH",
                "value" : "Pegaspargase"
              },
              {
                "language" : "en-US",
                "value" : "Pegaspargase"
              }
            ]
          },
          {
            "code" : "385544005",
            "display" : "Pegfilgrastim (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pegfilgrastim"
              },
              {
                "language" : "fr-CH",
                "value" : "pegfilgrastim"
              },
              {
                "language" : "it-CH",
                "value" : "Pegfilgrastim"
              },
              {
                "language" : "rm-CH",
                "value" : "Pegfilgrastim"
              },
              {
                "language" : "en-US",
                "value" : "Pegfilgrastim"
              }
            ]
          },
          {
            "code" : "421559001",
            "display" : "Peginterferon alfa-2a (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Peginterferon alfa-2a"
              },
              {
                "language" : "fr-CH",
                "value" : "peginterféron alfa-2a"
              },
              {
                "language" : "it-CH",
                "value" : "Peginterferone alfa-2a"
              },
              {
                "language" : "rm-CH",
                "value" : "Peginterferon alfa-2a"
              },
              {
                "language" : "en-US",
                "value" : "Peginterferon alfa-2a"
              }
            ]
          },
          {
            "code" : "716125002",
            "display" : "Pembrolizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pembrolizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "pembrolizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Pembrolizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Pembrolizumab"
              },
              {
                "language" : "en-US",
                "value" : "Pembrolizumab"
              }
            ]
          },
          {
            "code" : "409159000",
            "display" : "Pemetrexed (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pemetrexed"
              },
              {
                "language" : "fr-CH",
                "value" : "pémétrexed"
              },
              {
                "language" : "it-CH",
                "value" : "Pemetrexed"
              },
              {
                "language" : "rm-CH",
                "value" : "Pemetrexed"
              },
              {
                "language" : "en-US",
                "value" : "Pemetrexed"
              }
            ]
          },
          {
            "code" : "386939003",
            "display" : "Penciclovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Penciclovir"
              },
              {
                "language" : "fr-CH",
                "value" : "penciclovir"
              },
              {
                "language" : "it-CH",
                "value" : "Penciclovir"
              },
              {
                "language" : "rm-CH",
                "value" : "Penciclovir"
              },
              {
                "language" : "en-US",
                "value" : "Penciclovir"
              }
            ]
          },
          {
            "code" : "16826009",
            "display" : "Pentamidine isethionate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pentamidin diisetionat"
              },
              {
                "language" : "fr-CH",
                "value" : "pentamidine diiséthionate"
              },
              {
                "language" : "it-CH",
                "value" : "Pentamidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pentamidin diisetionat"
              },
              {
                "language" : "en-US",
                "value" : "Pentamidine isethionate"
              }
            ]
          },
          {
            "code" : "387522004",
            "display" : "Pentoxifylline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pentoxifyllin"
              },
              {
                "language" : "fr-CH",
                "value" : "pentoxyfylline"
              },
              {
                "language" : "it-CH",
                "value" : "Pentossifillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pentoxifyllin"
              },
              {
                "language" : "en-US",
                "value" : "Pentoxifylline"
              }
            ]
          },
          {
            "code" : "703127006",
            "display" : "Perampanel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Perampanel"
              },
              {
                "language" : "fr-CH",
                "value" : "pérampanel"
              },
              {
                "language" : "it-CH",
                "value" : "Perampanel"
              },
              {
                "language" : "rm-CH",
                "value" : "Perampanel"
              },
              {
                "language" : "en-US",
                "value" : "Perampanel"
              }
            ]
          },
          {
            "code" : "372916001",
            "display" : "Perindopril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Perindopril"
              },
              {
                "language" : "fr-CH",
                "value" : "périndopril"
              },
              {
                "language" : "it-CH",
                "value" : "Perindopril"
              },
              {
                "language" : "rm-CH",
                "value" : "Perindopril"
              },
              {
                "language" : "en-US",
                "value" : "Perindopril"
              }
            ]
          },
          {
            "code" : "410457007",
            "display" : "Permethrin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Permethrin"
              },
              {
                "language" : "fr-CH",
                "value" : "perméthrine"
              },
              {
                "language" : "it-CH",
                "value" : "Permetrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Permethrin"
              },
              {
                "language" : "en-US",
                "value" : "Permethrin"
              }
            ]
          },
          {
            "code" : "704226002",
            "display" : "Pertuzumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pertuzumab"
              },
              {
                "language" : "fr-CH",
                "value" : "pertuzumab"
              },
              {
                "language" : "it-CH",
                "value" : "Pertuzumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Pertuzumab"
              },
              {
                "language" : "en-US",
                "value" : "Pertuzumab"
              }
            ]
          },
          {
            "code" : "387298007",
            "display" : "Pethidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pethidin"
              },
              {
                "language" : "fr-CH",
                "value" : "péthidine"
              },
              {
                "language" : "it-CH",
                "value" : "Petidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pethidin"
              },
              {
                "language" : "en-US",
                "value" : "Pethidine"
              }
            ]
          },
          {
            "code" : "55486005",
            "display" : "Phenazone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenazon"
              },
              {
                "language" : "fr-CH",
                "value" : "phénazone"
              },
              {
                "language" : "it-CH",
                "value" : "Fenazone"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenazon"
              },
              {
                "language" : "en-US",
                "value" : "Phenazone"
              }
            ]
          },
          {
            "code" : "373500002",
            "display" : "Pheniramine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pheniramin"
              },
              {
                "language" : "fr-CH",
                "value" : "phéniramine"
              },
              {
                "language" : "it-CH",
                "value" : "Feniramina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pheniramin"
              },
              {
                "language" : "en-US",
                "value" : "Pheniramine"
              }
            ]
          },
          {
            "code" : "373505007",
            "display" : "Phenobarbital (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenobarbital"
              },
              {
                "language" : "fr-CH",
                "value" : "phénobarbital"
              },
              {
                "language" : "it-CH",
                "value" : "Fenobarbital"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenobarbital"
              },
              {
                "language" : "en-US",
                "value" : "Phenobarbital"
              }
            ]
          },
          {
            "code" : "372838003",
            "display" : "Phenoxybenzamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenoxybenzamin"
              },
              {
                "language" : "fr-CH",
                "value" : "phénoxybenzamine"
              },
              {
                "language" : "it-CH",
                "value" : "Fenossibenzamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenoxybenzamin"
              },
              {
                "language" : "en-US",
                "value" : "Phenoxybenzamine"
              }
            ]
          },
          {
            "code" : "56723006",
            "display" : "Phenoxymethylpenicillin potassium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenoxymethylpenicillin kalium"
              },
              {
                "language" : "fr-CH",
                "value" : "phénoxyméthylpénicilline potassique"
              },
              {
                "language" : "it-CH",
                "value" : "Fenossimetilpenicillina potassica"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenoxymethylpenicillin kalium"
              },
              {
                "language" : "en-US",
                "value" : "Phenoxymethylpenicillin potassium"
              }
            ]
          },
          {
            "code" : "59488002",
            "display" : "Phenprocoumon (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenprocoumon"
              },
              {
                "language" : "fr-CH",
                "value" : "phenprocoumone"
              },
              {
                "language" : "it-CH",
                "value" : "Fenprocumone"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenprocoumon"
              },
              {
                "language" : "en-US",
                "value" : "Phenprocoumon"
              }
            ]
          },
          {
            "code" : "372863003",
            "display" : "Phentolamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phentolamin"
              },
              {
                "language" : "fr-CH",
                "value" : "phentolamine"
              },
              {
                "language" : "it-CH",
                "value" : "Fentolamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Phentolamin"
              },
              {
                "language" : "en-US",
                "value" : "Phentolamine"
              }
            ]
          },
          {
            "code" : "63004003",
            "display" : "Phenylalanine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenylalanin"
              },
              {
                "language" : "fr-CH",
                "value" : "phénylalanine"
              },
              {
                "language" : "it-CH",
                "value" : "Fenilalanina"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenylalanin"
              },
              {
                "language" : "en-US",
                "value" : "Phenylalanine"
              }
            ]
          },
          {
            "code" : "372771005",
            "display" : "Phenylephrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenylephrin"
              },
              {
                "language" : "fr-CH",
                "value" : "phényléphrine"
              },
              {
                "language" : "it-CH",
                "value" : "Fenilefrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenylephrin"
              },
              {
                "language" : "en-US",
                "value" : "Phenylephrine"
              }
            ]
          },
          {
            "code" : "387220006",
            "display" : "Phenytoin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phenytoin"
              },
              {
                "language" : "fr-CH",
                "value" : "phénytoïne"
              },
              {
                "language" : "it-CH",
                "value" : "Fenitoina"
              },
              {
                "language" : "rm-CH",
                "value" : "Phenytoin"
              },
              {
                "language" : "en-US",
                "value" : "Phenytoin"
              }
            ]
          },
          {
            "code" : "396486005",
            "display" : "Pholcodine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pholcodin"
              },
              {
                "language" : "fr-CH",
                "value" : "pholcodine"
              },
              {
                "language" : "it-CH",
                "value" : "Folcodina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pholcodin"
              },
              {
                "language" : "en-US",
                "value" : "Pholcodine"
              }
            ]
          },
          {
            "code" : "78447009",
            "display" : "Phospholipid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phospholipide"
              },
              {
                "language" : "fr-CH",
                "value" : "phospholipides"
              },
              {
                "language" : "it-CH",
                "value" : "Fosfolipidi"
              },
              {
                "language" : "rm-CH",
                "value" : "Phospholipide"
              },
              {
                "language" : "en-US",
                "value" : "Phospholipid"
              }
            ]
          },
          {
            "code" : "373347005",
            "display" : "Physostigmine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Physostigmin"
              },
              {
                "language" : "fr-CH",
                "value" : "physostigmine"
              },
              {
                "language" : "it-CH",
                "value" : "Fisostigmina"
              },
              {
                "language" : "rm-CH",
                "value" : "Physostigmin"
              },
              {
                "language" : "en-US",
                "value" : "Physostigmine"
              }
            ]
          },
          {
            "code" : "66656000",
            "display" : "Phytomenadione (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Phytomenadion (Vitamin K1)"
              },
              {
                "language" : "fr-CH",
                "value" : "phytoménadione (Vitamine K1)"
              },
              {
                "language" : "it-CH",
                "value" : "Fitomenadione (vitamina K1)"
              },
              {
                "language" : "rm-CH",
                "value" : "Phytomenadion (Vitamin K1)"
              },
              {
                "language" : "en-US",
                "value" : "Phytomenadione"
              }
            ]
          },
          {
            "code" : "372895002",
            "display" : "Pilocarpine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pilocarpin"
              },
              {
                "language" : "fr-CH",
                "value" : "pilocarpine"
              },
              {
                "language" : "it-CH",
                "value" : "Pilocarpina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pilocarpin"
              },
              {
                "language" : "en-US",
                "value" : "Pilocarpine"
              }
            ]
          },
          {
            "code" : "385580005",
            "display" : "Pimecrolimus (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pimecrolimus"
              },
              {
                "language" : "fr-CH",
                "value" : "pimécrolimus"
              },
              {
                "language" : "it-CH",
                "value" : "Pimecrolimus"
              },
              {
                "language" : "rm-CH",
                "value" : "Pimecrolimus"
              },
              {
                "language" : "en-US",
                "value" : "Pimecrolimus"
              }
            ]
          },
          {
            "code" : "395828009",
            "display" : "Pioglitazone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pioglitazon"
              },
              {
                "language" : "fr-CH",
                "value" : "pioglitazone"
              },
              {
                "language" : "it-CH",
                "value" : "Pioglitazone"
              },
              {
                "language" : "rm-CH",
                "value" : "Pioglitazon"
              },
              {
                "language" : "en-US",
                "value" : "Pioglitazone"
              }
            ]
          },
          {
            "code" : "703362007",
            "display" : "Pipamperone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pipamperon"
              },
              {
                "language" : "fr-CH",
                "value" : "pipampérone"
              },
              {
                "language" : "it-CH",
                "value" : "Pipamperone"
              },
              {
                "language" : "rm-CH",
                "value" : "Pipamperon"
              },
              {
                "language" : "en-US",
                "value" : "Pipamperone"
              }
            ]
          },
          {
            "code" : "372836004",
            "display" : "Piperacillin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Piperacillin"
              },
              {
                "language" : "fr-CH",
                "value" : "pipéracilline"
              },
              {
                "language" : "it-CH",
                "value" : "Piperacillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Piperacillin"
              },
              {
                "language" : "en-US",
                "value" : "Piperacillin"
              }
            ]
          },
          {
            "code" : "395833008",
            "display" : "Piracetam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Piracetam"
              },
              {
                "language" : "fr-CH",
                "value" : "piracétam"
              },
              {
                "language" : "it-CH",
                "value" : "Piracetam"
              },
              {
                "language" : "rm-CH",
                "value" : "Piracetam"
              },
              {
                "language" : "en-US",
                "value" : "Piracetam"
              }
            ]
          },
          {
            "code" : "419451002",
            "display" : "Piretanide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Piretanid"
              },
              {
                "language" : "fr-CH",
                "value" : "pirétanide"
              },
              {
                "language" : "it-CH",
                "value" : "Piretanide"
              },
              {
                "language" : "rm-CH",
                "value" : "Piretanid"
              },
              {
                "language" : "en-US",
                "value" : "Piretanide"
              }
            ]
          },
          {
            "code" : "387153005",
            "display" : "Piroxicam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Piroxicam"
              },
              {
                "language" : "fr-CH",
                "value" : "piroxicam"
              },
              {
                "language" : "it-CH",
                "value" : "Piroxicam"
              },
              {
                "language" : "rm-CH",
                "value" : "Piroxicam"
              },
              {
                "language" : "en-US",
                "value" : "Piroxicam"
              }
            ]
          },
          {
            "code" : "443586000",
            "display" : "Pitavastatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pitavastatin"
              },
              {
                "language" : "fr-CH",
                "value" : "pitavastatine"
              },
              {
                "language" : "it-CH",
                "value" : "Pitavastatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pitavastatin"
              },
              {
                "language" : "en-US",
                "value" : "Pitavastatin"
              }
            ]
          },
          {
            "code" : "64182005",
            "display" : "Pituitary luteinizing hormone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lutropin (hLH)"
              },
              {
                "language" : "fr-CH",
                "value" : "lutropine (hLH)"
              },
              {
                "language" : "it-CH",
                "value" : "Ormone luteinizzante umano, hLH"
              },
              {
                "language" : "rm-CH",
                "value" : "Lutropin (hLH)"
              },
              {
                "language" : "en-US",
                "value" : "Pituitary luteinizing hormone"
              }
            ]
          },
          {
            "code" : "442264009",
            "display" : "Plerixafor (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Plerixafor"
              },
              {
                "language" : "fr-CH",
                "value" : "plérixafor"
              },
              {
                "language" : "it-CH",
                "value" : "Plerixafor"
              },
              {
                "language" : "rm-CH",
                "value" : "Plerixafor"
              },
              {
                "language" : "en-US",
                "value" : "Plerixafor"
              }
            ]
          },
          {
            "code" : "421952002",
            "display" : "Polihexanide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Polihexanid"
              },
              {
                "language" : "fr-CH",
                "value" : "polyhexanide"
              },
              {
                "language" : "it-CH",
                "value" : "Poliesanide"
              },
              {
                "language" : "rm-CH",
                "value" : "Polihexanid"
              },
              {
                "language" : "en-US",
                "value" : "Polihexanide"
              }
            ]
          },
          {
            "code" : "373224006",
            "display" : "Polymyxin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Polymyxin B"
              },
              {
                "language" : "fr-CH",
                "value" : "polymyxine B"
              },
              {
                "language" : "it-CH",
                "value" : "Polimixina B"
              },
              {
                "language" : "rm-CH",
                "value" : "Polymyxin B"
              },
              {
                "language" : "en-US",
                "value" : "Polymyxin"
              }
            ]
          },
          {
            "code" : "421747003",
            "display" : "Posaconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Posaconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "posaconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Posaconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Posaconazol"
              },
              {
                "language" : "en-US",
                "value" : "Posaconazole"
              }
            ]
          },
          {
            "code" : "52394008",
            "display" : "Potassium acetate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kaliumacetat"
              },
              {
                "language" : "fr-CH",
                "value" : "potassium acétate"
              },
              {
                "language" : "it-CH",
                "value" : "Potassio acetato"
              },
              {
                "language" : "rm-CH",
                "value" : "Kaliumacetat"
              },
              {
                "language" : "en-US",
                "value" : "Potassium acetate"
              }
            ]
          },
          {
            "code" : "8631001",
            "display" : "Potassium chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kaliumchlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "potassium chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Potassio cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Kaliumchlorid"
              },
              {
                "language" : "en-US",
                "value" : "Potassium chloride"
              }
            ]
          },
          {
            "code" : "387450001",
            "display" : "Potassium citrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kalium citrat (E332)"
              },
              {
                "language" : "fr-CH",
                "value" : "potassium citrate (E332)"
              },
              {
                "language" : "it-CH",
                "value" : "Potassio citrato (E332)"
              },
              {
                "language" : "rm-CH",
                "value" : "Kalium citrat (E332)"
              },
              {
                "language" : "en-US",
                "value" : "Potassium citrate"
              }
            ]
          },
          {
            "code" : "89219006",
            "display" : "Potassium gluconate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kalium D-gluconat wasserfrei"
              },
              {
                "language" : "fr-CH",
                "value" : "potassium D-gluconate anhydre"
              },
              {
                "language" : "it-CH",
                "value" : "Potassio gluconato"
              },
              {
                "language" : "rm-CH",
                "value" : "Kalium D-gluconat wasserfrei"
              },
              {
                "language" : "en-US",
                "value" : "Potassium gluconate"
              }
            ]
          },
          {
            "code" : "4681002",
            "display" : "Potassium permanganate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kaliumpermanganat"
              },
              {
                "language" : "fr-CH",
                "value" : "permanganate de potassium"
              },
              {
                "language" : "it-CH",
                "value" : "Potassio permanganato"
              },
              {
                "language" : "rm-CH",
                "value" : "Kaliumpermanganat"
              },
              {
                "language" : "en-US",
                "value" : "Potassium permanganate"
              }
            ]
          },
          {
            "code" : "80916004",
            "display" : "Potassium phosphate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kalium phosphat"
              },
              {
                "language" : "fr-CH",
                "value" : "potassium phosphate"
              },
              {
                "language" : "it-CH",
                "value" : "Potassio fosfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Kalium phosphat"
              },
              {
                "language" : "en-US",
                "value" : "Potassium phosphate"
              }
            ]
          },
          {
            "code" : "386989006",
            "display" : "Povidone iodine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Povidon iod"
              },
              {
                "language" : "fr-CH",
                "value" : "povidone iodée"
              },
              {
                "language" : "it-CH",
                "value" : "Iodopovidone"
              },
              {
                "language" : "rm-CH",
                "value" : "Povidon iod"
              },
              {
                "language" : "en-US",
                "value" : "Povidone iodine"
              }
            ]
          },
          {
            "code" : "386852009",
            "display" : "Pramipexole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pramipexol"
              },
              {
                "language" : "fr-CH",
                "value" : "pramipexole"
              },
              {
                "language" : "it-CH",
                "value" : "Pramipexolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Pramipexol"
              },
              {
                "language" : "en-US",
                "value" : "Pramipexole"
              }
            ]
          },
          {
            "code" : "443129001",
            "display" : "Prasugrel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prasugrel"
              },
              {
                "language" : "fr-CH",
                "value" : "prasugrel"
              },
              {
                "language" : "it-CH",
                "value" : "Prasugrel"
              },
              {
                "language" : "rm-CH",
                "value" : "Prasugrel"
              },
              {
                "language" : "en-US",
                "value" : "Prasugrel"
              }
            ]
          },
          {
            "code" : "373566006",
            "display" : "Pravastatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pravastatin"
              },
              {
                "language" : "fr-CH",
                "value" : "pravastatine"
              },
              {
                "language" : "it-CH",
                "value" : "Pravastatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pravastatin"
              },
              {
                "language" : "en-US",
                "value" : "Pravastatin"
              }
            ]
          },
          {
            "code" : "387417001",
            "display" : "Prazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "prazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Prazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Prazepam"
              },
              {
                "language" : "en-US",
                "value" : "Prazepam"
              }
            ]
          },
          {
            "code" : "387310003",
            "display" : "Praziquantel (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Praziquantel"
              },
              {
                "language" : "fr-CH",
                "value" : "praziquantel"
              },
              {
                "language" : "it-CH",
                "value" : "Praziquantel"
              },
              {
                "language" : "rm-CH",
                "value" : "Praziquantel"
              },
              {
                "language" : "en-US",
                "value" : "Praziquantel"
              }
            ]
          },
          {
            "code" : "126086006",
            "display" : "Prednicarbate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prednicarbat"
              },
              {
                "language" : "fr-CH",
                "value" : "prednicarbate"
              },
              {
                "language" : "it-CH",
                "value" : "Prednicarbato"
              },
              {
                "language" : "rm-CH",
                "value" : "Prednicarbat"
              },
              {
                "language" : "en-US",
                "value" : "Prednicarbate"
              }
            ]
          },
          {
            "code" : "116601002",
            "display" : "Prednisolone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prednisolon"
              },
              {
                "language" : "fr-CH",
                "value" : "prednisolone"
              },
              {
                "language" : "it-CH",
                "value" : "Prednisolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Prednisolon"
              },
              {
                "language" : "en-US",
                "value" : "Prednisolone"
              }
            ]
          },
          {
            "code" : "116602009",
            "display" : "Prednisone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prednison"
              },
              {
                "language" : "fr-CH",
                "value" : "prednisone"
              },
              {
                "language" : "it-CH",
                "value" : "Prednisone"
              },
              {
                "language" : "rm-CH",
                "value" : "Prednison"
              },
              {
                "language" : "en-US",
                "value" : "Prednisone"
              }
            ]
          },
          {
            "code" : "415160008",
            "display" : "Pregabalin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pregabalin"
              },
              {
                "language" : "fr-CH",
                "value" : "prégabaline"
              },
              {
                "language" : "it-CH",
                "value" : "Pregabalin"
              },
              {
                "language" : "rm-CH",
                "value" : "Pregabalin"
              },
              {
                "language" : "en-US",
                "value" : "Pregabalin"
              }
            ]
          },
          {
            "code" : "387107003",
            "display" : "Prilocaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prilocain"
              },
              {
                "language" : "fr-CH",
                "value" : "prilocaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Prilocaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Prilocain"
              },
              {
                "language" : "en-US",
                "value" : "Prilocaine"
              }
            ]
          },
          {
            "code" : "429663004",
            "display" : "Primaquine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Primaquin"
              },
              {
                "language" : "fr-CH",
                "value" : "primaquine"
              },
              {
                "language" : "it-CH",
                "value" : "Primachina"
              },
              {
                "language" : "rm-CH",
                "value" : "Primaquin"
              },
              {
                "language" : "en-US",
                "value" : "Primaquine"
              }
            ]
          },
          {
            "code" : "387256009",
            "display" : "Primidone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Primidon"
              },
              {
                "language" : "fr-CH",
                "value" : "primidone"
              },
              {
                "language" : "it-CH",
                "value" : "Primidone"
              },
              {
                "language" : "rm-CH",
                "value" : "Primidon"
              },
              {
                "language" : "en-US",
                "value" : "Primidone"
              }
            ]
          },
          {
            "code" : "387365004",
            "display" : "Probenecid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Probenecid"
              },
              {
                "language" : "fr-CH",
                "value" : "probénécide"
              },
              {
                "language" : "it-CH",
                "value" : "Probenecid"
              },
              {
                "language" : "rm-CH",
                "value" : "Probenecid"
              },
              {
                "language" : "en-US",
                "value" : "Probenecid"
              }
            ]
          },
          {
            "code" : "372589008",
            "display" : "Procainamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Procainamid"
              },
              {
                "language" : "fr-CH",
                "value" : "procaïnamide"
              },
              {
                "language" : "it-CH",
                "value" : "Procainamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Procainamid"
              },
              {
                "language" : "en-US",
                "value" : "Procainamide"
              }
            ]
          },
          {
            "code" : "387238009",
            "display" : "Procaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Procain"
              },
              {
                "language" : "fr-CH",
                "value" : "procaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Procaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Procain"
              },
              {
                "language" : "en-US",
                "value" : "Procaine"
              }
            ]
          },
          {
            "code" : "387247001",
            "display" : "Procyclidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Procyclidin"
              },
              {
                "language" : "fr-CH",
                "value" : "procyclidine"
              },
              {
                "language" : "it-CH",
                "value" : "Prociclidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Procyclidin"
              },
              {
                "language" : "en-US",
                "value" : "Procyclidine"
              }
            ]
          },
          {
            "code" : "16683002",
            "display" : "Progesterone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Progesteron"
              },
              {
                "language" : "fr-CH",
                "value" : "progestérone"
              },
              {
                "language" : "it-CH",
                "value" : "Progesterone"
              },
              {
                "language" : "rm-CH",
                "value" : "Progesteron"
              },
              {
                "language" : "en-US",
                "value" : "Progesterone"
              }
            ]
          },
          {
            "code" : "387094004",
            "display" : "Proguanil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Proguanil"
              },
              {
                "language" : "fr-CH",
                "value" : "proguanil"
              },
              {
                "language" : "it-CH",
                "value" : "Proguanil"
              },
              {
                "language" : "rm-CH",
                "value" : "Proguanil"
              },
              {
                "language" : "en-US",
                "value" : "Proguanil"
              }
            ]
          },
          {
            "code" : "52541003",
            "display" : "Proline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prolin"
              },
              {
                "language" : "fr-CH",
                "value" : "proline"
              },
              {
                "language" : "it-CH",
                "value" : "Prolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Prolin"
              },
              {
                "language" : "en-US",
                "value" : "Proline"
              }
            ]
          },
          {
            "code" : "79135001",
            "display" : "Promazine hydrochloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Promazin hydrochlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "promazine chlorhydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Promazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Promazin hydrochlorid"
              },
              {
                "language" : "en-US",
                "value" : "Promazine hydrochloride"
              }
            ]
          },
          {
            "code" : "372871004",
            "display" : "Promethazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Promethazin"
              },
              {
                "language" : "fr-CH",
                "value" : "prométhazine"
              },
              {
                "language" : "it-CH",
                "value" : "Prometazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Promethazin"
              },
              {
                "language" : "en-US",
                "value" : "Promethazine"
              }
            ]
          },
          {
            "code" : "372910007",
            "display" : "Propafenone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Propafenon"
              },
              {
                "language" : "fr-CH",
                "value" : "propafénone"
              },
              {
                "language" : "it-CH",
                "value" : "Propafenone"
              },
              {
                "language" : "rm-CH",
                "value" : "Propafenon"
              },
              {
                "language" : "en-US",
                "value" : "Propafenone"
              }
            ]
          },
          {
            "code" : "387423006",
            "display" : "Propofol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Propofol"
              },
              {
                "language" : "fr-CH",
                "value" : "propofol"
              },
              {
                "language" : "it-CH",
                "value" : "Propofol"
              },
              {
                "language" : "rm-CH",
                "value" : "Propofol"
              },
              {
                "language" : "en-US",
                "value" : "Propofol"
              }
            ]
          },
          {
            "code" : "372772003",
            "display" : "Propranolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Propranolol"
              },
              {
                "language" : "fr-CH",
                "value" : "propranolol"
              },
              {
                "language" : "it-CH",
                "value" : "Propranololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Propranolol"
              },
              {
                "language" : "en-US",
                "value" : "Propranolol"
              }
            ]
          },
          {
            "code" : "699188007",
            "display" : "Propyphenazone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Propyphenazon"
              },
              {
                "language" : "fr-CH",
                "value" : "propyphénazone"
              },
              {
                "language" : "it-CH",
                "value" : "Propifenazone"
              },
              {
                "language" : "rm-CH",
                "value" : "Propyphenazon"
              },
              {
                "language" : "en-US",
                "value" : "Propyphenazone"
              }
            ]
          },
          {
            "code" : "372630008",
            "display" : "Protamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Protamin"
              },
              {
                "language" : "fr-CH",
                "value" : "protamine"
              },
              {
                "language" : "it-CH",
                "value" : "Protamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Protamin"
              },
              {
                "language" : "en-US",
                "value" : "Protamine"
              }
            ]
          },
          {
            "code" : "25525005",
            "display" : "Protein C (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Protein C (human)"
              },
              {
                "language" : "fr-CH",
                "value" : "protéine C humaine"
              },
              {
                "language" : "it-CH",
                "value" : "Proteina C (umana)"
              },
              {
                "language" : "rm-CH",
                "value" : "Protein C (human)"
              },
              {
                "language" : "en-US",
                "value" : "Protein C"
              }
            ]
          },
          {
            "code" : "56898001",
            "display" : "Protein S (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Protein S (human)"
              },
              {
                "language" : "fr-CH",
                "value" : "protéine S humaine"
              },
              {
                "language" : "it-CH",
                "value" : "Proteina S (umana)"
              },
              {
                "language" : "rm-CH",
                "value" : "Protein S (human)"
              },
              {
                "language" : "en-US",
                "value" : "Protein S"
              }
            ]
          },
          {
            "code" : "703589003",
            "display" : "Protionamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Protionamid"
              },
              {
                "language" : "fr-CH",
                "value" : "protionamide"
              },
              {
                "language" : "it-CH",
                "value" : "Protionamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Protionamid"
              },
              {
                "language" : "en-US",
                "value" : "Protionamide"
              }
            ]
          },
          {
            "code" : "412495007",
            "display" : "Protireline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Protirelin"
              },
              {
                "language" : "fr-CH",
                "value" : "protiréline"
              },
              {
                "language" : "it-CH",
                "value" : "Protirelina"
              },
              {
                "language" : "rm-CH",
                "value" : "Protirelin"
              },
              {
                "language" : "en-US",
                "value" : "Protireline"
              }
            ]
          },
          {
            "code" : "699273008",
            "display" : "Prucalopride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Prucaloprid"
              },
              {
                "language" : "fr-CH",
                "value" : "prucalopride"
              },
              {
                "language" : "it-CH",
                "value" : "Prucalopride"
              },
              {
                "language" : "rm-CH",
                "value" : "Prucaloprid"
              },
              {
                "language" : "en-US",
                "value" : "Prucalopride"
              }
            ]
          },
          {
            "code" : "372900003",
            "display" : "Pseudoephedrine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pseudoephedrin"
              },
              {
                "language" : "fr-CH",
                "value" : "pseudoéphédrine"
              },
              {
                "language" : "it-CH",
                "value" : "Pseudoefedrina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pseudoephedrin"
              },
              {
                "language" : "en-US",
                "value" : "Pseudoephedrine"
              }
            ]
          },
          {
            "code" : "387076005",
            "display" : "Pyrazinamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pyrazinamid"
              },
              {
                "language" : "fr-CH",
                "value" : "pyrazinamide"
              },
              {
                "language" : "it-CH",
                "value" : "Pirazinamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Pyrazinamid"
              },
              {
                "language" : "en-US",
                "value" : "Pyrazinamide"
              }
            ]
          },
          {
            "code" : "34915005",
            "display" : "Pyridostigmine bromide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pyridostigmin bromid"
              },
              {
                "language" : "fr-CH",
                "value" : "pyridostigmine bromure"
              },
              {
                "language" : "it-CH",
                "value" : "Piridostigmina bromuro"
              },
              {
                "language" : "rm-CH",
                "value" : "Pyridostigmin bromid"
              },
              {
                "language" : "en-US",
                "value" : "Pyridostigmine bromide"
              }
            ]
          },
          {
            "code" : "259663004",
            "display" : "Pyridoxal phosphate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pyridoxal-5-phosphat"
              },
              {
                "language" : "fr-CH",
                "value" : "pyridoxal-5-phosphate"
              },
              {
                "language" : "it-CH",
                "value" : "Piridossal fosfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Pyridoxal-5-phosphat"
              },
              {
                "language" : "en-US",
                "value" : "Pyridoxal phosphate"
              }
            ]
          },
          {
            "code" : "430469009",
            "display" : "Pyridoxine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pyridoxin (Vitamin B6)"
              },
              {
                "language" : "fr-CH",
                "value" : "pyridoxine (Vitamine B6)"
              },
              {
                "language" : "it-CH",
                "value" : "Piridossina (vitamina B6)"
              },
              {
                "language" : "rm-CH",
                "value" : "Pyridoxin (Vitamin B6)"
              },
              {
                "language" : "en-US",
                "value" : "Pyridoxine"
              }
            ]
          },
          {
            "code" : "373769001",
            "display" : "Pyrimethamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pyrimethamin"
              },
              {
                "language" : "fr-CH",
                "value" : "pyriméthamine"
              },
              {
                "language" : "it-CH",
                "value" : "Pirimetamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Pyrimethamin"
              },
              {
                "language" : "en-US",
                "value" : "Pyrimethamine"
              }
            ]
          },
          {
            "code" : "386850001",
            "display" : "Quetiapine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Quetiapin"
              },
              {
                "language" : "fr-CH",
                "value" : "quétiapine"
              },
              {
                "language" : "it-CH",
                "value" : "Quetiapina"
              },
              {
                "language" : "rm-CH",
                "value" : "Quetiapin"
              },
              {
                "language" : "en-US",
                "value" : "Quetiapine"
              }
            ]
          },
          {
            "code" : "386874003",
            "display" : "Quinapril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Quinapril"
              },
              {
                "language" : "fr-CH",
                "value" : "quinapril"
              },
              {
                "language" : "it-CH",
                "value" : "Quinapril"
              },
              {
                "language" : "rm-CH",
                "value" : "Quinapril"
              },
              {
                "language" : "en-US",
                "value" : "Quinapril"
              }
            ]
          },
          {
            "code" : "373497008",
            "display" : "Quinine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chinin"
              },
              {
                "language" : "fr-CH",
                "value" : "quinine"
              },
              {
                "language" : "it-CH",
                "value" : "Chinina"
              },
              {
                "language" : "rm-CH",
                "value" : "Chinin"
              },
              {
                "language" : "en-US",
                "value" : "Quinine"
              }
            ]
          },
          {
            "code" : "422225001",
            "display" : "Rabeprazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rabeprazol"
              },
              {
                "language" : "fr-CH",
                "value" : "rabéprazole"
              },
              {
                "language" : "it-CH",
                "value" : "Rabeprazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Rabeprazol"
              },
              {
                "language" : "en-US",
                "value" : "Rabeprazole"
              }
            ]
          },
          {
            "code" : "422303009",
            "display" : "Rabies human immune globulin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tollwut-Immunglobulin vom Menschen"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline humaine anti-rabique"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina umana antirabbica"
              },
              {
                "language" : "rm-CH",
                "value" : "Tollwut-Immunglobulin vom Menschen"
              },
              {
                "language" : "en-US",
                "value" : "Rabies human immune globulin"
              }
            ]
          },
          {
            "code" : "109029006",
            "display" : "Raloxifene (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Raloxifen"
              },
              {
                "language" : "fr-CH",
                "value" : "raloxifène"
              },
              {
                "language" : "it-CH",
                "value" : "Raloxifene"
              },
              {
                "language" : "rm-CH",
                "value" : "Raloxifen"
              },
              {
                "language" : "en-US",
                "value" : "Raloxifene"
              }
            ]
          },
          {
            "code" : "429707008",
            "display" : "Raltegravir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Raltegravir"
              },
              {
                "language" : "fr-CH",
                "value" : "raltégravir"
              },
              {
                "language" : "it-CH",
                "value" : "Raltegravir"
              },
              {
                "language" : "rm-CH",
                "value" : "Raltegravir"
              },
              {
                "language" : "en-US",
                "value" : "Raltegravir"
              }
            ]
          },
          {
            "code" : "395857008",
            "display" : "Raltitrexed (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Raltitrexed"
              },
              {
                "language" : "fr-CH",
                "value" : "raltitrexed"
              },
              {
                "language" : "it-CH",
                "value" : "Raltitrexed"
              },
              {
                "language" : "rm-CH",
                "value" : "Raltitrexed"
              },
              {
                "language" : "en-US",
                "value" : "Raltitrexed"
              }
            ]
          },
          {
            "code" : "386872004",
            "display" : "Ramipril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ramipril"
              },
              {
                "language" : "fr-CH",
                "value" : "ramipril"
              },
              {
                "language" : "it-CH",
                "value" : "Ramipril"
              },
              {
                "language" : "rm-CH",
                "value" : "Ramipril"
              },
              {
                "language" : "en-US",
                "value" : "Ramipril"
              }
            ]
          },
          {
            "code" : "704259004",
            "display" : "Ramucirumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ramucirumab"
              },
              {
                "language" : "fr-CH",
                "value" : "ramucirumab"
              },
              {
                "language" : "it-CH",
                "value" : "Ramucirumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Ramucirumab"
              },
              {
                "language" : "en-US",
                "value" : "Ramucirumab"
              }
            ]
          },
          {
            "code" : "372755005",
            "display" : "Ranitidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ranitidin"
              },
              {
                "language" : "fr-CH",
                "value" : "ranitidine"
              },
              {
                "language" : "it-CH",
                "value" : "Ranitidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ranitidin"
              },
              {
                "language" : "en-US",
                "value" : "Ranitidine"
              }
            ]
          },
          {
            "code" : "420365007",
            "display" : "Ranolazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ranolazin"
              },
              {
                "language" : "fr-CH",
                "value" : "ranolazine"
              },
              {
                "language" : "it-CH",
                "value" : "Ranolazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ranolazin"
              },
              {
                "language" : "en-US",
                "value" : "Ranolazine"
              }
            ]
          },
          {
            "code" : "418734001",
            "display" : "Rasagiline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rasagilin"
              },
              {
                "language" : "fr-CH",
                "value" : "rasagiline"
              },
              {
                "language" : "it-CH",
                "value" : "Rasagilina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rasagilin"
              },
              {
                "language" : "en-US",
                "value" : "Rasagiline"
              }
            ]
          },
          {
            "code" : "395858003",
            "display" : "Rasburicase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rasburicase"
              },
              {
                "language" : "fr-CH",
                "value" : "rasburicase"
              },
              {
                "language" : "it-CH",
                "value" : "Rasburicase"
              },
              {
                "language" : "rm-CH",
                "value" : "Rasburicase"
              },
              {
                "language" : "en-US",
                "value" : "Rasburicase"
              }
            ]
          },
          {
            "code" : "395859006",
            "display" : "Reboxetine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Reboxetin"
              },
              {
                "language" : "fr-CH",
                "value" : "réboxétine"
              },
              {
                "language" : "it-CH",
                "value" : "Reboxetina"
              },
              {
                "language" : "rm-CH",
                "value" : "Reboxetin"
              },
              {
                "language" : "en-US",
                "value" : "Reboxetine"
              }
            ]
          },
          {
            "code" : "386839004",
            "display" : "Remifentanil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Remifentanil"
              },
              {
                "language" : "fr-CH",
                "value" : "rémifentanil"
              },
              {
                "language" : "it-CH",
                "value" : "Remifentanil"
              },
              {
                "language" : "rm-CH",
                "value" : "Remifentanil"
              },
              {
                "language" : "en-US",
                "value" : "Remifentanil"
              }
            ]
          },
          {
            "code" : "386964000",
            "display" : "Repaglinide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Repaglinid"
              },
              {
                "language" : "fr-CH",
                "value" : "répaglinide"
              },
              {
                "language" : "it-CH",
                "value" : "Repaglinide"
              },
              {
                "language" : "rm-CH",
                "value" : "Repaglinid"
              },
              {
                "language" : "en-US",
                "value" : "Repaglinide"
              }
            ]
          },
          {
            "code" : "699271005",
            "display" : "Retigabine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Retigabin"
              },
              {
                "language" : "fr-CH",
                "value" : "rétigabine"
              },
              {
                "language" : "it-CH",
                "value" : "Retigabina"
              },
              {
                "language" : "rm-CH",
                "value" : "Retigabin"
              },
              {
                "language" : "en-US",
                "value" : "Retigabine"
              }
            ]
          },
          {
            "code" : "82622003",
            "display" : "Retinol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Retinol (Vitamin A)"
              },
              {
                "language" : "fr-CH",
                "value" : "rétinol (Vitamine a)"
              },
              {
                "language" : "it-CH",
                "value" : "Retinolo (vitamina A)"
              },
              {
                "language" : "rm-CH",
                "value" : "Retinol (Vitamin A)"
              },
              {
                "language" : "en-US",
                "value" : "Retinol"
              }
            ]
          },
          {
            "code" : "387188005",
            "display" : "Ribavirin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ribavirin"
              },
              {
                "language" : "fr-CH",
                "value" : "ribavirine"
              },
              {
                "language" : "it-CH",
                "value" : "Ribavirina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ribavirin"
              },
              {
                "language" : "en-US",
                "value" : "Ribavirin"
              }
            ]
          },
          {
            "code" : "13235001",
            "display" : "Riboflavin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Riboflavin (Vitamin B2, E101)"
              },
              {
                "language" : "fr-CH",
                "value" : "riboflavine (Vitamine B2, E101)"
              },
              {
                "language" : "it-CH",
                "value" : "Riboflavina (vitamina B2, E 101)"
              },
              {
                "language" : "rm-CH",
                "value" : "Riboflavin (Vitamin B2, E101)"
              },
              {
                "language" : "en-US",
                "value" : "Riboflavin"
              }
            ]
          },
          {
            "code" : "386893001",
            "display" : "Rifabutin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rifabutin"
              },
              {
                "language" : "fr-CH",
                "value" : "rifabutine"
              },
              {
                "language" : "it-CH",
                "value" : "Rifabutina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rifabutin"
              },
              {
                "language" : "en-US",
                "value" : "Rifabutin"
              }
            ]
          },
          {
            "code" : "387159009",
            "display" : "Rifampicin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rifampicin"
              },
              {
                "language" : "fr-CH",
                "value" : "rifampicine"
              },
              {
                "language" : "it-CH",
                "value" : "Rifampicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rifampicin"
              },
              {
                "language" : "en-US",
                "value" : "Rifampicin"
              }
            ]
          },
          {
            "code" : "412553001",
            "display" : "Rifaximin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rifaximin"
              },
              {
                "language" : "fr-CH",
                "value" : "rifaximine"
              },
              {
                "language" : "it-CH",
                "value" : "Rifaximina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rifaximin"
              },
              {
                "language" : "en-US",
                "value" : "Rifaximin"
              }
            ]
          },
          {
            "code" : "703123005",
            "display" : "Rilpivirine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rilpivirin"
              },
              {
                "language" : "fr-CH",
                "value" : "rilpivirine"
              },
              {
                "language" : "it-CH",
                "value" : "Rilpivirina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rilpivirin"
              },
              {
                "language" : "en-US",
                "value" : "Rilpivirine"
              }
            ]
          },
          {
            "code" : "386980005",
            "display" : "Riluzole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Riluzol"
              },
              {
                "language" : "fr-CH",
                "value" : "riluzole"
              },
              {
                "language" : "it-CH",
                "value" : "Riluzolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Riluzol"
              },
              {
                "language" : "en-US",
                "value" : "Riluzole"
              }
            ]
          },
          {
            "code" : "387046003",
            "display" : "Rimexolone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rimexolon"
              },
              {
                "language" : "fr-CH",
                "value" : "rimexolone"
              },
              {
                "language" : "it-CH",
                "value" : "Rimexolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Rimexolon"
              },
              {
                "language" : "en-US",
                "value" : "Rimexolone"
              }
            ]
          },
          {
            "code" : "713333001",
            "display" : "Riociguat (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Riociguat"
              },
              {
                "language" : "fr-CH",
                "value" : "riociguat"
              },
              {
                "language" : "it-CH",
                "value" : "Riociguat"
              },
              {
                "language" : "rm-CH",
                "value" : "Riociguat"
              },
              {
                "language" : "en-US",
                "value" : "Riociguat"
              }
            ]
          },
          {
            "code" : "387064005",
            "display" : "Risedronate sodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Risedronat natrium"
              },
              {
                "language" : "fr-CH",
                "value" : "risédronate sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio risedronato"
              },
              {
                "language" : "rm-CH",
                "value" : "Risedronat natrium"
              },
              {
                "language" : "en-US",
                "value" : "Risedronate sodium"
              }
            ]
          },
          {
            "code" : "768539002",
            "display" : "Risedronic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Risedronsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide risédronique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido risedronico"
              },
              {
                "language" : "rm-CH",
                "value" : "Risedronsäure"
              },
              {
                "language" : "en-US",
                "value" : "Risedronic acid"
              }
            ]
          },
          {
            "code" : "386840002",
            "display" : "Risperidone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Risperidon"
              },
              {
                "language" : "fr-CH",
                "value" : "rispéridone"
              },
              {
                "language" : "it-CH",
                "value" : "Risperidone"
              },
              {
                "language" : "rm-CH",
                "value" : "Risperidon"
              },
              {
                "language" : "en-US",
                "value" : "Risperidone"
              }
            ]
          },
          {
            "code" : "386896009",
            "display" : "Ritonavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ritonavir"
              },
              {
                "language" : "fr-CH",
                "value" : "ritonavir"
              },
              {
                "language" : "it-CH",
                "value" : "Ritonavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Ritonavir"
              },
              {
                "language" : "en-US",
                "value" : "Ritonavir"
              }
            ]
          },
          {
            "code" : "386919002",
            "display" : "Rituximab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rituximab"
              },
              {
                "language" : "fr-CH",
                "value" : "rituximab"
              },
              {
                "language" : "it-CH",
                "value" : "Rituximab"
              },
              {
                "language" : "rm-CH",
                "value" : "Rituximab"
              },
              {
                "language" : "en-US",
                "value" : "Rituximab"
              }
            ]
          },
          {
            "code" : "442031002",
            "display" : "Rivaroxaban (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rivaroxaban"
              },
              {
                "language" : "fr-CH",
                "value" : "rivaroxaban"
              },
              {
                "language" : "it-CH",
                "value" : "Rivaroxaban"
              },
              {
                "language" : "rm-CH",
                "value" : "Rivaroxaban"
              },
              {
                "language" : "en-US",
                "value" : "Rivaroxaban"
              }
            ]
          },
          {
            "code" : "395868008",
            "display" : "Rivastigmine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rivastigmin"
              },
              {
                "language" : "fr-CH",
                "value" : "rivastigmine"
              },
              {
                "language" : "it-CH",
                "value" : "Rivastigmina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rivastigmin"
              },
              {
                "language" : "en-US",
                "value" : "Rivastigmine"
              }
            ]
          },
          {
            "code" : "363573000",
            "display" : "Rizatriptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rizatriptan"
              },
              {
                "language" : "fr-CH",
                "value" : "rizatriptan"
              },
              {
                "language" : "it-CH",
                "value" : "Rizatriptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Rizatriptan"
              },
              {
                "language" : "en-US",
                "value" : "Rizatriptan"
              }
            ]
          },
          {
            "code" : "108450002",
            "display" : "Rocuronium bromide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rocuronium bromid"
              },
              {
                "language" : "fr-CH",
                "value" : "rocuronium bromure"
              },
              {
                "language" : "it-CH",
                "value" : "Rocuronio bromuro"
              },
              {
                "language" : "rm-CH",
                "value" : "Rocuronium bromid"
              },
              {
                "language" : "en-US",
                "value" : "Rocuronium bromide"
              }
            ]
          },
          {
            "code" : "448971002",
            "display" : "Roflumilast (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Roflumilast"
              },
              {
                "language" : "fr-CH",
                "value" : "roflumilast"
              },
              {
                "language" : "it-CH",
                "value" : "Roflumilast"
              },
              {
                "language" : "rm-CH",
                "value" : "Roflumilast"
              },
              {
                "language" : "en-US",
                "value" : "Roflumilast"
              }
            ]
          },
          {
            "code" : "439122000",
            "display" : "Romiplostim (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Romiplostim"
              },
              {
                "language" : "fr-CH",
                "value" : "romiplostim"
              },
              {
                "language" : "it-CH",
                "value" : "Romiplostim"
              },
              {
                "language" : "rm-CH",
                "value" : "Romiplostim"
              },
              {
                "language" : "en-US",
                "value" : "Romiplostim"
              }
            ]
          },
          {
            "code" : "372499000",
            "display" : "Ropinirole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ropinirol"
              },
              {
                "language" : "fr-CH",
                "value" : "ropinirole"
              },
              {
                "language" : "it-CH",
                "value" : "Ropinirolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Ropinirol"
              },
              {
                "language" : "en-US",
                "value" : "Ropinirole"
              }
            ]
          },
          {
            "code" : "386969005",
            "display" : "Ropivacaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ropivacain"
              },
              {
                "language" : "fr-CH",
                "value" : "ropivacaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Ropivacaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Ropivacain"
              },
              {
                "language" : "en-US",
                "value" : "Ropivacaine"
              }
            ]
          },
          {
            "code" : "700067006",
            "display" : "Rosuvastatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rosuvastatin"
              },
              {
                "language" : "fr-CH",
                "value" : "rosuvastatine"
              },
              {
                "language" : "it-CH",
                "value" : "Rosuvastatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rosuvastatin"
              },
              {
                "language" : "en-US",
                "value" : "Rosuvastatin"
              }
            ]
          },
          {
            "code" : "421924006",
            "display" : "Rotigotine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rotigotin"
              },
              {
                "language" : "fr-CH",
                "value" : "rotigotine"
              },
              {
                "language" : "it-CH",
                "value" : "Rotigotina"
              },
              {
                "language" : "rm-CH",
                "value" : "Rotigotin"
              },
              {
                "language" : "en-US",
                "value" : "Rotigotine"
              }
            ]
          },
          {
            "code" : "429835003",
            "display" : "Rufinamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rufinamid"
              },
              {
                "language" : "fr-CH",
                "value" : "rufinamide"
              },
              {
                "language" : "it-CH",
                "value" : "Rufinamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Rufinamid"
              },
              {
                "language" : "en-US",
                "value" : "Rufinamide"
              }
            ]
          },
          {
            "code" : "700441006",
            "display" : "Saccharomyces boulardii (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Saccharomyces boulardii"
              },
              {
                "language" : "fr-CH",
                "value" : "saccharomyces boulardii"
              },
              {
                "language" : "it-CH",
                "value" : "Saccharomyces boulardii"
              },
              {
                "language" : "rm-CH",
                "value" : "Saccharomyces boulardii"
              },
              {
                "language" : "en-US",
                "value" : "Saccharomyces boulardii"
              }
            ]
          },
          {
            "code" : "716072000",
            "display" : "Sacubitril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sacubitril"
              },
              {
                "language" : "fr-CH",
                "value" : "sacubitril"
              },
              {
                "language" : "it-CH",
                "value" : "Sacubitril"
              },
              {
                "language" : "rm-CH",
                "value" : "Sacubitril"
              },
              {
                "language" : "en-US",
                "value" : "Sacubitril"
              }
            ]
          },
          {
            "code" : "718852000",
            "display" : "Safinamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Safinamid"
              },
              {
                "language" : "fr-CH",
                "value" : "safinamide"
              },
              {
                "language" : "it-CH",
                "value" : "Safinamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Safinamid"
              },
              {
                "language" : "en-US",
                "value" : "Safinamide"
              }
            ]
          },
          {
            "code" : "372897005",
            "display" : "Salbutamol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Salbutamol"
              },
              {
                "language" : "fr-CH",
                "value" : "salbutamol"
              },
              {
                "language" : "it-CH",
                "value" : "Salbutamolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Salbutamol"
              },
              {
                "language" : "en-US",
                "value" : "Salbutamol"
              }
            ]
          },
          {
            "code" : "22192002",
            "display" : "Salicylamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Salicylamid"
              },
              {
                "language" : "fr-CH",
                "value" : "salicylamide"
              },
              {
                "language" : "it-CH",
                "value" : "Salicilamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Salicylamid"
              },
              {
                "language" : "en-US",
                "value" : "Salicylamide"
              }
            ]
          },
          {
            "code" : "387253001",
            "display" : "Salicylic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Salicylsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide salicylique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido salicilico"
              },
              {
                "language" : "rm-CH",
                "value" : "Salicylsäure"
              },
              {
                "language" : "en-US",
                "value" : "Salicylic acid"
              }
            ]
          },
          {
            "code" : "372515005",
            "display" : "Salmeterol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Salmeterol"
              },
              {
                "language" : "fr-CH",
                "value" : "salmétérol"
              },
              {
                "language" : "it-CH",
                "value" : "Salmeterolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Salmeterol"
              },
              {
                "language" : "en-US",
                "value" : "Salmeterol"
              }
            ]
          },
          {
            "code" : "432859002",
            "display" : "Sapropterin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sapropterin"
              },
              {
                "language" : "fr-CH",
                "value" : "saproptérine"
              },
              {
                "language" : "it-CH",
                "value" : "Sapropterina"
              },
              {
                "language" : "rm-CH",
                "value" : "Sapropterin"
              },
              {
                "language" : "en-US",
                "value" : "Sapropterin"
              }
            ]
          },
          {
            "code" : "372530001",
            "display" : "Saquinavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Saquinavir"
              },
              {
                "language" : "fr-CH",
                "value" : "saquinavir"
              },
              {
                "language" : "it-CH",
                "value" : "Saquinavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Saquinavir"
              },
              {
                "language" : "en-US",
                "value" : "Saquinavir"
              }
            ]
          },
          {
            "code" : "735231009",
            "display" : "Sarilumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sarilumab"
              },
              {
                "language" : "fr-CH",
                "value" : "sarilumab"
              },
              {
                "language" : "it-CH",
                "value" : "Sarilumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Sarilumab"
              },
              {
                "language" : "en-US",
                "value" : "Sarilumab"
              }
            ]
          },
          {
            "code" : "443087004",
            "display" : "Saxagliptin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Saxagliptin"
              },
              {
                "language" : "fr-CH",
                "value" : "saxagliptine"
              },
              {
                "language" : "it-CH",
                "value" : "Saxagliptin"
              },
              {
                "language" : "rm-CH",
                "value" : "Saxagliptin"
              },
              {
                "language" : "en-US",
                "value" : "Saxagliptin"
              }
            ]
          },
          {
            "code" : "387409009",
            "display" : "Scopolamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Scopolamin"
              },
              {
                "language" : "fr-CH",
                "value" : "scopolamine"
              },
              {
                "language" : "it-CH",
                "value" : "Scopolamina"
              },
              {
                "language" : "rm-CH",
                "value" : "Scopolamin"
              },
              {
                "language" : "en-US",
                "value" : "Scopolamine"
              }
            ]
          },
          {
            "code" : "395739004",
            "display" : "Scopolamine butylbromide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Scopolamin butylbromid"
              },
              {
                "language" : "fr-CH",
                "value" : "scopolamine butylbromure"
              },
              {
                "language" : "it-CH",
                "value" : "Scopolamina butilbromuro"
              },
              {
                "language" : "rm-CH",
                "value" : "Scopolamin butylbromid"
              },
              {
                "language" : "en-US",
                "value" : "Scopolamine butylbromide"
              }
            ]
          },
          {
            "code" : "19205004",
            "display" : "Secretin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Secretin"
              },
              {
                "language" : "fr-CH",
                "value" : "sécrétine"
              },
              {
                "language" : "it-CH",
                "value" : "Secretina"
              },
              {
                "language" : "rm-CH",
                "value" : "Secretin"
              },
              {
                "language" : "en-US",
                "value" : "Secretin"
              }
            ]
          },
          {
            "code" : "708822004",
            "display" : "Secukinumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Secukinumab"
              },
              {
                "language" : "fr-CH",
                "value" : "sécukinumab"
              },
              {
                "language" : "it-CH",
                "value" : "Secukinumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Secukinumab"
              },
              {
                "language" : "en-US",
                "value" : "Secukinumab"
              }
            ]
          },
          {
            "code" : "14125007",
            "display" : "Serine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "L-Serin"
              },
              {
                "language" : "fr-CH",
                "value" : "l-sérine"
              },
              {
                "language" : "it-CH",
                "value" : "Serina"
              },
              {
                "language" : "rm-CH",
                "value" : "L-Serin"
              },
              {
                "language" : "en-US",
                "value" : "Serine"
              }
            ]
          },
          {
            "code" : "372594008",
            "display" : "Sertraline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sertralin"
              },
              {
                "language" : "fr-CH",
                "value" : "sertraline"
              },
              {
                "language" : "it-CH",
                "value" : "Sertralina"
              },
              {
                "language" : "rm-CH",
                "value" : "Sertralin"
              },
              {
                "language" : "en-US",
                "value" : "Sertraline"
              }
            ]
          },
          {
            "code" : "395871000",
            "display" : "Sevelamer (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sevelamer"
              },
              {
                "language" : "fr-CH",
                "value" : "sévélamer"
              },
              {
                "language" : "it-CH",
                "value" : "Sevelamer"
              },
              {
                "language" : "rm-CH",
                "value" : "Sevelamer"
              },
              {
                "language" : "en-US",
                "value" : "Sevelamer"
              }
            ]
          },
          {
            "code" : "386842005",
            "display" : "Sevoflurane (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sevofluran"
              },
              {
                "language" : "fr-CH",
                "value" : "sévoflurane"
              },
              {
                "language" : "it-CH",
                "value" : "Sevoflurano"
              },
              {
                "language" : "rm-CH",
                "value" : "Sevofluran"
              },
              {
                "language" : "en-US",
                "value" : "Sevoflurane"
              }
            ]
          },
          {
            "code" : "372572000",
            "display" : "Sildenafil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sildenafil"
              },
              {
                "language" : "fr-CH",
                "value" : "sildénafil"
              },
              {
                "language" : "it-CH",
                "value" : "Sildenafil"
              },
              {
                "language" : "rm-CH",
                "value" : "Sildenafil"
              },
              {
                "language" : "en-US",
                "value" : "Sildenafil"
              }
            ]
          },
          {
            "code" : "720527007",
            "display" : "Silibinin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Silibinin"
              },
              {
                "language" : "fr-CH",
                "value" : "silibinine"
              },
              {
                "language" : "it-CH",
                "value" : "Silibina"
              },
              {
                "language" : "rm-CH",
                "value" : "Silibinin"
              },
              {
                "language" : "en-US",
                "value" : "Silibinin"
              }
            ]
          },
          {
            "code" : "442042006",
            "display" : "Silodosin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Silodosin"
              },
              {
                "language" : "fr-CH",
                "value" : "silodosine"
              },
              {
                "language" : "it-CH",
                "value" : "Silodosina"
              },
              {
                "language" : "rm-CH",
                "value" : "Silodosin"
              },
              {
                "language" : "en-US",
                "value" : "Silodosin"
              }
            ]
          },
          {
            "code" : "387442005",
            "display" : "Simeticone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Simeticon"
              },
              {
                "language" : "fr-CH",
                "value" : "siméticone"
              },
              {
                "language" : "it-CH",
                "value" : "Simeticone"
              },
              {
                "language" : "rm-CH",
                "value" : "Simeticon"
              },
              {
                "language" : "en-US",
                "value" : "Simeticone"
              }
            ]
          },
          {
            "code" : "718853005",
            "display" : "Simoctocog alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Simoctocog alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "simoctocog alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Simoctocog alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Simoctocog alfa"
              },
              {
                "language" : "en-US",
                "value" : "Simoctocog alfa"
              }
            ]
          },
          {
            "code" : "387584000",
            "display" : "Simvastatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Simvastatin"
              },
              {
                "language" : "fr-CH",
                "value" : "simvastatine"
              },
              {
                "language" : "it-CH",
                "value" : "Simvastatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Simvastatin"
              },
              {
                "language" : "en-US",
                "value" : "Simvastatin"
              }
            ]
          },
          {
            "code" : "387014003",
            "display" : "Sirolimus (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sirolimus"
              },
              {
                "language" : "fr-CH",
                "value" : "sirolimus"
              },
              {
                "language" : "it-CH",
                "value" : "Sirolimus"
              },
              {
                "language" : "rm-CH",
                "value" : "Sirolimus"
              },
              {
                "language" : "en-US",
                "value" : "Sirolimus"
              }
            ]
          },
          {
            "code" : "423307000",
            "display" : "Sitagliptin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sitagliptin"
              },
              {
                "language" : "fr-CH",
                "value" : "sitagliptine"
              },
              {
                "language" : "it-CH",
                "value" : "Sitagliptin"
              },
              {
                "language" : "rm-CH",
                "value" : "Sitagliptin"
              },
              {
                "language" : "en-US",
                "value" : "Sitagliptin"
              }
            ]
          },
          {
            "code" : "726006002",
            "display" : "Sodium acetate trihydrat (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natrium acetat-3-Wasser"
              },
              {
                "language" : "fr-CH",
                "value" : "sodium acétate trihydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio acetato triidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Natrium acetat-3-Wasser"
              },
              {
                "language" : "en-US",
                "value" : "Sodium acetate trihydrat"
              }
            ]
          },
          {
            "code" : "387319002",
            "display" : "Sodium bicarbonate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natriumhydrogencarbonat"
              },
              {
                "language" : "fr-CH",
                "value" : "sodium bicarbonate"
              },
              {
                "language" : "it-CH",
                "value" : "Bicarbonato di sodio"
              },
              {
                "language" : "rm-CH",
                "value" : "Natriumhydrogencarbonat"
              },
              {
                "language" : "en-US",
                "value" : "Sodium bicarbonate"
              }
            ]
          },
          {
            "code" : "387390002",
            "display" : "Sodium chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natriumchlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "sodium chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Natriumchlorid"
              },
              {
                "language" : "en-US",
                "value" : "Sodium chloride"
              }
            ]
          },
          {
            "code" : "412546005",
            "display" : "Sodium citrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natriumcitrat"
              },
              {
                "language" : "fr-CH",
                "value" : "sodium citrate"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio citrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Natriumcitrat"
              },
              {
                "language" : "en-US",
                "value" : "Sodium citrate"
              }
            ]
          },
          {
            "code" : "726716000",
            "display" : "Sodium dihydrogen phosphate dihydrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natrium dihydrogenphosphat-2-Wasser"
              },
              {
                "language" : "fr-CH",
                "value" : "sodium dihydrogénophosphate dihydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio fosfato monobasico diidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Natrium dihydrogenphosphat-2-Wasser"
              },
              {
                "language" : "en-US",
                "value" : "Sodium dihydrogen phosphate dihydrate"
              }
            ]
          },
          {
            "code" : "23423003",
            "display" : "Sodium hydroxide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natriumhydroxid"
              },
              {
                "language" : "fr-CH",
                "value" : "sodium hydroxyde"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio idrossido"
              },
              {
                "language" : "rm-CH",
                "value" : "Natriumhydroxid"
              },
              {
                "language" : "en-US",
                "value" : "Sodium hydroxide"
              }
            ]
          },
          {
            "code" : "387139005",
            "display" : "Sodium nitroprusside (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nitroprussidnatrium, wasserfrei"
              },
              {
                "language" : "fr-CH",
                "value" : "nitroprussiate de sodium anhydre"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio nitroprussiato"
              },
              {
                "language" : "rm-CH",
                "value" : "Nitroprussidnatrium, wasserfrei"
              },
              {
                "language" : "en-US",
                "value" : "Sodium nitroprusside"
              }
            ]
          },
          {
            "code" : "395881001",
            "display" : "Sodium picosulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Natrium picosulfat"
              },
              {
                "language" : "fr-CH",
                "value" : "picosulfate sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio picosolfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Natrium picosulfat"
              },
              {
                "language" : "en-US",
                "value" : "Sodium picosulfate"
              }
            ]
          },
          {
            "code" : "96277001",
            "display" : "Sodium selenite (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dinatrium-selenit"
              },
              {
                "language" : "fr-CH",
                "value" : "sélénite disodique"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio selenito"
              },
              {
                "language" : "rm-CH",
                "value" : "Dinatrium-selenit"
              },
              {
                "language" : "en-US",
                "value" : "Sodium selenite"
              }
            ]
          },
          {
            "code" : "387209006",
            "display" : "Sodium thiosulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dinatrium-thiosulfat"
              },
              {
                "language" : "fr-CH",
                "value" : "sodium thiosulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Sodio tiosolfato"
              },
              {
                "language" : "rm-CH",
                "value" : "Dinatrium-thiosulfat"
              },
              {
                "language" : "en-US",
                "value" : "Sodium thiosulfate"
              }
            ]
          },
          {
            "code" : "710806008",
            "display" : "Sofosbuvir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sofosbuvir"
              },
              {
                "language" : "fr-CH",
                "value" : "sofosbuvir"
              },
              {
                "language" : "it-CH",
                "value" : "Sofosbuvir"
              },
              {
                "language" : "rm-CH",
                "value" : "Sofosbuvir"
              },
              {
                "language" : "en-US",
                "value" : "Sofosbuvir"
              }
            ]
          },
          {
            "code" : "407030007",
            "display" : "Solifenacin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Solifenacin"
              },
              {
                "language" : "fr-CH",
                "value" : "solifénacine"
              },
              {
                "language" : "it-CH",
                "value" : "Solifenacina"
              },
              {
                "language" : "rm-CH",
                "value" : "Solifenacin"
              },
              {
                "language" : "en-US",
                "value" : "Solifenacin"
              }
            ]
          },
          {
            "code" : "49722008",
            "display" : "Somatostatin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Somatostatin"
              },
              {
                "language" : "fr-CH",
                "value" : "somatostatine"
              },
              {
                "language" : "it-CH",
                "value" : "Somatostatina"
              },
              {
                "language" : "rm-CH",
                "value" : "Somatostatin"
              },
              {
                "language" : "en-US",
                "value" : "Somatostatin"
              }
            ]
          },
          {
            "code" : "16628008",
            "display" : "Somatotropin releasing factor (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Somatorelin"
              },
              {
                "language" : "fr-CH",
                "value" : "somatoréline"
              },
              {
                "language" : "it-CH",
                "value" : "Somatorelina"
              },
              {
                "language" : "rm-CH",
                "value" : "Somatorelin"
              },
              {
                "language" : "en-US",
                "value" : "Somatotropin releasing factor"
              }
            ]
          },
          {
            "code" : "395883003",
            "display" : "Somatropin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Somatropin"
              },
              {
                "language" : "fr-CH",
                "value" : "somatropine"
              },
              {
                "language" : "it-CH",
                "value" : "Somatropina"
              },
              {
                "language" : "rm-CH",
                "value" : "Somatropin"
              },
              {
                "language" : "en-US",
                "value" : "Somatropin"
              }
            ]
          },
          {
            "code" : "422042001",
            "display" : "Sorafenib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sorafenib"
              },
              {
                "language" : "fr-CH",
                "value" : "sorafénib"
              },
              {
                "language" : "it-CH",
                "value" : "Sorafenib"
              },
              {
                "language" : "rm-CH",
                "value" : "Sorafenib"
              },
              {
                "language" : "en-US",
                "value" : "Sorafenib"
              }
            ]
          },
          {
            "code" : "372911006",
            "display" : "Sotalol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sotalol"
              },
              {
                "language" : "fr-CH",
                "value" : "sotalol"
              },
              {
                "language" : "it-CH",
                "value" : "Sotalolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Sotalol"
              },
              {
                "language" : "en-US",
                "value" : "Sotalol"
              }
            ]
          },
          {
            "code" : "226911007",
            "display" : "Soy bean oil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sojabohnenöl"
              },
              {
                "language" : "fr-CH",
                "value" : "soja fèves huile"
              },
              {
                "language" : "it-CH",
                "value" : "Soia olio"
              },
              {
                "language" : "rm-CH",
                "value" : "Sojabohnenöl"
              },
              {
                "language" : "en-US",
                "value" : "Soy bean oil"
              }
            ]
          },
          {
            "code" : "387078006",
            "display" : "Spironolactone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spironolacton"
              },
              {
                "language" : "fr-CH",
                "value" : "spironolactone"
              },
              {
                "language" : "it-CH",
                "value" : "Spironolattone"
              },
              {
                "language" : "rm-CH",
                "value" : "Spironolacton"
              },
              {
                "language" : "en-US",
                "value" : "Spironolactone"
              }
            ]
          },
          {
            "code" : "428221002",
            "display" : "Stiripentol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Stiripentol"
              },
              {
                "language" : "fr-CH",
                "value" : "stiripentol"
              },
              {
                "language" : "it-CH",
                "value" : "Stiripentolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Stiripentol"
              },
              {
                "language" : "en-US",
                "value" : "Stiripentol"
              }
            ]
          },
          {
            "code" : "387033008",
            "display" : "Substance with protease mechanism of action (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Protease"
              },
              {
                "language" : "fr-CH",
                "value" : "protéase"
              },
              {
                "language" : "it-CH",
                "value" : "Proteasi"
              },
              {
                "language" : "rm-CH",
                "value" : "Protease"
              },
              {
                "language" : "en-US",
                "value" : "Substance with protease mechanism of action"
              }
            ]
          },
          {
            "code" : "58907007",
            "display" : "Succinylcholine chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Suxamethonium chlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "suxaméthonium chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Succinilcolina cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Suxamethonium chlorid"
              },
              {
                "language" : "en-US",
                "value" : "Succinylcholine chloride"
              }
            ]
          },
          {
            "code" : "49998007",
            "display" : "Sufentanil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sufentanil"
              },
              {
                "language" : "fr-CH",
                "value" : "sufentanil"
              },
              {
                "language" : "it-CH",
                "value" : "Sufentanil"
              },
              {
                "language" : "rm-CH",
                "value" : "Sufentanil"
              },
              {
                "language" : "en-US",
                "value" : "Sufentanil"
              }
            ]
          },
          {
            "code" : "442340006",
            "display" : "Sugammadex (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sugammadex"
              },
              {
                "language" : "fr-CH",
                "value" : "sugammadex"
              },
              {
                "language" : "it-CH",
                "value" : "Sugammadex"
              },
              {
                "language" : "rm-CH",
                "value" : "Sugammadex"
              },
              {
                "language" : "en-US",
                "value" : "Sugammadex"
              }
            ]
          },
          {
            "code" : "74523009",
            "display" : "Sulfadiazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sulfadiazin"
              },
              {
                "language" : "fr-CH",
                "value" : "sulfadiazine"
              },
              {
                "language" : "it-CH",
                "value" : "Sulfadiazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Sulfadiazin"
              },
              {
                "language" : "en-US",
                "value" : "Sulfadiazine"
              }
            ]
          },
          {
            "code" : "363528007",
            "display" : "Sulfamethoxazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sulfamethoxazol"
              },
              {
                "language" : "fr-CH",
                "value" : "sulfaméthoxazole"
              },
              {
                "language" : "it-CH",
                "value" : "Sulfametossazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Sulfamethoxazol"
              },
              {
                "language" : "en-US",
                "value" : "Sulfamethoxazole"
              }
            ]
          },
          {
            "code" : "387248006",
            "display" : "Sulfasalazine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sulfasalazin"
              },
              {
                "language" : "fr-CH",
                "value" : "sulfasalazine"
              },
              {
                "language" : "it-CH",
                "value" : "Sulfasalazina"
              },
              {
                "language" : "rm-CH",
                "value" : "Sulfasalazin"
              },
              {
                "language" : "en-US",
                "value" : "Sulfasalazine"
              }
            ]
          },
          {
            "code" : "259276004",
            "display" : "Sulfur hexafluoride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Schwefelhexafluorid"
              },
              {
                "language" : "fr-CH",
                "value" : "soufre hexafluorure"
              },
              {
                "language" : "it-CH",
                "value" : "Zolfo esafluoruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Schwefelhexafluorid"
              },
              {
                "language" : "en-US",
                "value" : "Sulfur hexafluoride"
              }
            ]
          },
          {
            "code" : "395891007",
            "display" : "Sulpiride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sulpirid"
              },
              {
                "language" : "fr-CH",
                "value" : "sulpiride"
              },
              {
                "language" : "it-CH",
                "value" : "Sulpiride"
              },
              {
                "language" : "rm-CH",
                "value" : "Sulpirid"
              },
              {
                "language" : "en-US",
                "value" : "Sulpiride"
              }
            ]
          },
          {
            "code" : "713461008",
            "display" : "Sulprostone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sulproston"
              },
              {
                "language" : "fr-CH",
                "value" : "sulprostone"
              },
              {
                "language" : "it-CH",
                "value" : "Sulprostone"
              },
              {
                "language" : "rm-CH",
                "value" : "Sulproston"
              },
              {
                "language" : "en-US",
                "value" : "Sulprostone"
              }
            ]
          },
          {
            "code" : "50580004",
            "display" : "Sulthiamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sultiam"
              },
              {
                "language" : "fr-CH",
                "value" : "sultiame"
              },
              {
                "language" : "it-CH",
                "value" : "Sultiame"
              },
              {
                "language" : "rm-CH",
                "value" : "Sultiam"
              },
              {
                "language" : "en-US",
                "value" : "Sulthiamine"
              }
            ]
          },
          {
            "code" : "395892000",
            "display" : "Sumatriptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sumatriptan"
              },
              {
                "language" : "fr-CH",
                "value" : "sumatriptan"
              },
              {
                "language" : "it-CH",
                "value" : "Sumatriptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Sumatriptan"
              },
              {
                "language" : "en-US",
                "value" : "Sumatriptan"
              }
            ]
          },
          {
            "code" : "386975001",
            "display" : "Tacrolimus (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tacrolimus"
              },
              {
                "language" : "fr-CH",
                "value" : "tacrolimus"
              },
              {
                "language" : "it-CH",
                "value" : "Tacrolimus"
              },
              {
                "language" : "rm-CH",
                "value" : "Tacrolimus"
              },
              {
                "language" : "en-US",
                "value" : "Tacrolimus"
              }
            ]
          },
          {
            "code" : "407111005",
            "display" : "Tadalafil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tadalafil"
              },
              {
                "language" : "fr-CH",
                "value" : "tadalafil"
              },
              {
                "language" : "it-CH",
                "value" : "Tadalafil"
              },
              {
                "language" : "rm-CH",
                "value" : "Tadalafil"
              },
              {
                "language" : "en-US",
                "value" : "Tadalafil"
              }
            ]
          },
          {
            "code" : "699181001",
            "display" : "Tafluprost (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tafluprost"
              },
              {
                "language" : "fr-CH",
                "value" : "tafluprost"
              },
              {
                "language" : "it-CH",
                "value" : "Tafluprost"
              },
              {
                "language" : "rm-CH",
                "value" : "Tafluprost"
              },
              {
                "language" : "en-US",
                "value" : "Tafluprost"
              }
            ]
          },
          {
            "code" : "373345002",
            "display" : "Tamoxifen (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tamoxifen"
              },
              {
                "language" : "fr-CH",
                "value" : "tamoxifène"
              },
              {
                "language" : "it-CH",
                "value" : "Tamoxifene"
              },
              {
                "language" : "rm-CH",
                "value" : "Tamoxifen"
              },
              {
                "language" : "en-US",
                "value" : "Tamoxifen"
              }
            ]
          },
          {
            "code" : "372509005",
            "display" : "Tamsulosin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tamsulosin"
              },
              {
                "language" : "fr-CH",
                "value" : "tamsulosine"
              },
              {
                "language" : "it-CH",
                "value" : "Tamsulosina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tamsulosin"
              },
              {
                "language" : "en-US",
                "value" : "Tamsulosin"
              }
            ]
          },
          {
            "code" : "441757005",
            "display" : "Tapentadol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tapentadol"
              },
              {
                "language" : "fr-CH",
                "value" : "tapentadol"
              },
              {
                "language" : "it-CH",
                "value" : "Tapentadolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Tapentadol"
              },
              {
                "language" : "en-US",
                "value" : "Tapentadol"
              }
            ]
          },
          {
            "code" : "10944007",
            "display" : "Taurine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Taurin"
              },
              {
                "language" : "fr-CH",
                "value" : "taurine"
              },
              {
                "language" : "it-CH",
                "value" : "Taurina"
              },
              {
                "language" : "rm-CH",
                "value" : "Taurin"
              },
              {
                "language" : "en-US",
                "value" : "Taurine"
              }
            ]
          },
          {
            "code" : "96007008",
            "display" : "Tazobactam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tazobactam"
              },
              {
                "language" : "fr-CH",
                "value" : "tazobactam"
              },
              {
                "language" : "it-CH",
                "value" : "Tazobactam"
              },
              {
                "language" : "rm-CH",
                "value" : "Tazobactam"
              },
              {
                "language" : "en-US",
                "value" : "Tazobactam"
              }
            ]
          },
          {
            "code" : "387529008",
            "display" : "Teicoplanin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Teicoplanin"
              },
              {
                "language" : "fr-CH",
                "value" : "téicoplanine"
              },
              {
                "language" : "it-CH",
                "value" : "Teicoplanina"
              },
              {
                "language" : "rm-CH",
                "value" : "Teicoplanin"
              },
              {
                "language" : "en-US",
                "value" : "Teicoplanin"
              }
            ]
          },
          {
            "code" : "387069000",
            "display" : "Telmisartan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Telmisartan"
              },
              {
                "language" : "fr-CH",
                "value" : "telmisartan"
              },
              {
                "language" : "it-CH",
                "value" : "Telmisartan"
              },
              {
                "language" : "rm-CH",
                "value" : "Telmisartan"
              },
              {
                "language" : "en-US",
                "value" : "Telmisartan"
              }
            ]
          },
          {
            "code" : "387300007",
            "display" : "Temazepam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Temazepam"
              },
              {
                "language" : "fr-CH",
                "value" : "témazépam"
              },
              {
                "language" : "it-CH",
                "value" : "Temazepam"
              },
              {
                "language" : "rm-CH",
                "value" : "Temazepam"
              },
              {
                "language" : "en-US",
                "value" : "Temazepam"
              }
            ]
          },
          {
            "code" : "387009002",
            "display" : "Temozolomide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Temozolomid"
              },
              {
                "language" : "fr-CH",
                "value" : "témozolomide"
              },
              {
                "language" : "it-CH",
                "value" : "Temozolomide"
              },
              {
                "language" : "rm-CH",
                "value" : "Temozolomid"
              },
              {
                "language" : "en-US",
                "value" : "Temozolomide"
              }
            ]
          },
          {
            "code" : "422091007",
            "display" : "Tenofovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tenofovir"
              },
              {
                "language" : "fr-CH",
                "value" : "ténofovir"
              },
              {
                "language" : "it-CH",
                "value" : "Tenofovir"
              },
              {
                "language" : "rm-CH",
                "value" : "Tenofovir"
              },
              {
                "language" : "en-US",
                "value" : "Tenofovir"
              }
            ]
          },
          {
            "code" : "373450007",
            "display" : "Terbinafine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Terbinafin"
              },
              {
                "language" : "fr-CH",
                "value" : "terbinafine"
              },
              {
                "language" : "it-CH",
                "value" : "Terbinafina"
              },
              {
                "language" : "rm-CH",
                "value" : "Terbinafin"
              },
              {
                "language" : "en-US",
                "value" : "Terbinafine"
              }
            ]
          },
          {
            "code" : "24583009",
            "display" : "Terbutaline sulfate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Terbutalin sulfat"
              },
              {
                "language" : "fr-CH",
                "value" : "terbutaline sulfate"
              },
              {
                "language" : "it-CH",
                "value" : "Terbutalina"
              },
              {
                "language" : "rm-CH",
                "value" : "Terbutalin sulfat"
              },
              {
                "language" : "en-US",
                "value" : "Terbutaline sulfate"
              }
            ]
          },
          {
            "code" : "425438001",
            "display" : "Teriparatide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Teriparatid"
              },
              {
                "language" : "fr-CH",
                "value" : "tériparatide"
              },
              {
                "language" : "it-CH",
                "value" : "Teriparatide"
              },
              {
                "language" : "rm-CH",
                "value" : "Teriparatid"
              },
              {
                "language" : "en-US",
                "value" : "Teriparatide"
              }
            ]
          },
          {
            "code" : "395899009",
            "display" : "Terlipressin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Terlipressin"
              },
              {
                "language" : "fr-CH",
                "value" : "terlipressine"
              },
              {
                "language" : "it-CH",
                "value" : "Terlipressina"
              },
              {
                "language" : "rm-CH",
                "value" : "Terlipressin"
              },
              {
                "language" : "en-US",
                "value" : "Terlipressin"
              }
            ]
          },
          {
            "code" : "43688007",
            "display" : "Testosterone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Testosteron"
              },
              {
                "language" : "fr-CH",
                "value" : "testostérone"
              },
              {
                "language" : "it-CH",
                "value" : "Testosterone"
              },
              {
                "language" : "rm-CH",
                "value" : "Testosteron"
              },
              {
                "language" : "en-US",
                "value" : "Testosterone"
              }
            ]
          },
          {
            "code" : "428527002",
            "display" : "Tetanus immunoglobulin of human origin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tetanus-Immunglobulin vom Menschen"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline humaine anti-tétanique"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina umana antitetanica"
              },
              {
                "language" : "rm-CH",
                "value" : "Tetanus-Immunglobulin vom Menschen"
              },
              {
                "language" : "en-US",
                "value" : "Tetanus immunoglobulin of human origin"
              }
            ]
          },
          {
            "code" : "387309008",
            "display" : "Tetracaine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tetracain"
              },
              {
                "language" : "fr-CH",
                "value" : "tétracaïne"
              },
              {
                "language" : "it-CH",
                "value" : "Tetracaina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tetracain"
              },
              {
                "language" : "en-US",
                "value" : "Tetracaine"
              }
            ]
          },
          {
            "code" : "96363002",
            "display" : "Tetracosactide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tetracosactid"
              },
              {
                "language" : "fr-CH",
                "value" : "tétracosactide"
              },
              {
                "language" : "it-CH",
                "value" : "Tetracosactide"
              },
              {
                "language" : "rm-CH",
                "value" : "Tetracosactid"
              },
              {
                "language" : "en-US",
                "value" : "Tetracosactide"
              }
            ]
          },
          {
            "code" : "372809001",
            "display" : "Tetracycline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tetracyclin"
              },
              {
                "language" : "fr-CH",
                "value" : "tétracycline"
              },
              {
                "language" : "it-CH",
                "value" : "Tetraciclina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tetracyclin"
              },
              {
                "language" : "en-US",
                "value" : "Tetracycline"
              }
            ]
          },
          {
            "code" : "372673004",
            "display" : "Tetryzoline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tetryzolin"
              },
              {
                "language" : "fr-CH",
                "value" : "tétryzoline"
              },
              {
                "language" : "it-CH",
                "value" : "Tetrizolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tetryzolin"
              },
              {
                "language" : "en-US",
                "value" : "Tetryzoline"
              }
            ]
          },
          {
            "code" : "372810006",
            "display" : "Theophylline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Theophyllin"
              },
              {
                "language" : "fr-CH",
                "value" : "théophylline"
              },
              {
                "language" : "it-CH",
                "value" : "Teofillina"
              },
              {
                "language" : "rm-CH",
                "value" : "Theophyllin"
              },
              {
                "language" : "en-US",
                "value" : "Theophylline"
              }
            ]
          },
          {
            "code" : "259659006",
            "display" : "Thiamine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Thiamin (Vitamin B1)"
              },
              {
                "language" : "fr-CH",
                "value" : "thiamine (Vitamine B1)"
              },
              {
                "language" : "it-CH",
                "value" : "Tiamina (vitamina B1)"
              },
              {
                "language" : "rm-CH",
                "value" : "Thiamin (Vitamin B1)"
              },
              {
                "language" : "en-US",
                "value" : "Thiamine"
              }
            ]
          },
          {
            "code" : "387508004",
            "display" : "Thiotepa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Thiotepa"
              },
              {
                "language" : "fr-CH",
                "value" : "thiotépa"
              },
              {
                "language" : "it-CH",
                "value" : "Tiotepa"
              },
              {
                "language" : "rm-CH",
                "value" : "Thiotepa"
              },
              {
                "language" : "en-US",
                "value" : "Thiotepa"
              }
            ]
          },
          {
            "code" : "52736009",
            "display" : "Threonine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Threonin"
              },
              {
                "language" : "fr-CH",
                "value" : "thréonine"
              },
              {
                "language" : "it-CH",
                "value" : "Treonina"
              },
              {
                "language" : "rm-CH",
                "value" : "Threonin"
              },
              {
                "language" : "en-US",
                "value" : "Threonine"
              }
            ]
          },
          {
            "code" : "699180000",
            "display" : "Tiapride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tiaprid"
              },
              {
                "language" : "fr-CH",
                "value" : "tiapride"
              },
              {
                "language" : "it-CH",
                "value" : "Tiapride"
              },
              {
                "language" : "rm-CH",
                "value" : "Tiaprid"
              },
              {
                "language" : "en-US",
                "value" : "Tiapride"
              }
            ]
          },
          {
            "code" : "395903002",
            "display" : "Tibolone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tibolon"
              },
              {
                "language" : "fr-CH",
                "value" : "tibolone"
              },
              {
                "language" : "it-CH",
                "value" : "Tibolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Tibolon"
              },
              {
                "language" : "en-US",
                "value" : "Tibolone"
              }
            ]
          },
          {
            "code" : "698805004",
            "display" : "Ticagrelor (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ticagrelor"
              },
              {
                "language" : "fr-CH",
                "value" : "ticagrélor"
              },
              {
                "language" : "it-CH",
                "value" : "Ticagrelor"
              },
              {
                "language" : "rm-CH",
                "value" : "Ticagrelor"
              },
              {
                "language" : "en-US",
                "value" : "Ticagrelor"
              }
            ]
          },
          {
            "code" : "418313005",
            "display" : "Tigecycline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tigecyclin"
              },
              {
                "language" : "fr-CH",
                "value" : "tigécycline"
              },
              {
                "language" : "it-CH",
                "value" : "Tigeciclina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tigecyclin"
              },
              {
                "language" : "en-US",
                "value" : "Tigecycline"
              }
            ]
          },
          {
            "code" : "96186004",
            "display" : "Tilidine hydrochloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tilidin hydrochlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "tilidine chlorhydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Tilidina cloridrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Tilidin hydrochlorid"
              },
              {
                "language" : "en-US",
                "value" : "Tilidine hydrochloride"
              }
            ]
          },
          {
            "code" : "372880004",
            "display" : "Timolol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Timolol"
              },
              {
                "language" : "fr-CH",
                "value" : "timolol"
              },
              {
                "language" : "it-CH",
                "value" : "Timololo"
              },
              {
                "language" : "rm-CH",
                "value" : "Timolol"
              },
              {
                "language" : "en-US",
                "value" : "Timolol"
              }
            ]
          },
          {
            "code" : "387407006",
            "display" : "Tioguanine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tioguanin"
              },
              {
                "language" : "fr-CH",
                "value" : "tioguanine"
              },
              {
                "language" : "it-CH",
                "value" : "Tioguanina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tioguanin"
              },
              {
                "language" : "en-US",
                "value" : "Tioguanine"
              }
            ]
          },
          {
            "code" : "409169006",
            "display" : "Tiotropium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tiotropium"
              },
              {
                "language" : "fr-CH",
                "value" : "tiotropium"
              },
              {
                "language" : "it-CH",
                "value" : "Tiotropio"
              },
              {
                "language" : "rm-CH",
                "value" : "Tiotropium"
              },
              {
                "language" : "en-US",
                "value" : "Tiotropium"
              }
            ]
          },
          {
            "code" : "419409009",
            "display" : "Tipranavir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tipranavir"
              },
              {
                "language" : "fr-CH",
                "value" : "tipranavir"
              },
              {
                "language" : "it-CH",
                "value" : "Tipranavir"
              },
              {
                "language" : "rm-CH",
                "value" : "Tipranavir"
              },
              {
                "language" : "en-US",
                "value" : "Tipranavir"
              }
            ]
          },
          {
            "code" : "373440006",
            "display" : "Tizanidine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tizanidin"
              },
              {
                "language" : "fr-CH",
                "value" : "tizanidine"
              },
              {
                "language" : "it-CH",
                "value" : "Tizanidina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tizanidin"
              },
              {
                "language" : "en-US",
                "value" : "Tizanidine"
              }
            ]
          },
          {
            "code" : "373548001",
            "display" : "Tobramycine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tobramycin"
              },
              {
                "language" : "fr-CH",
                "value" : "tobramycine"
              },
              {
                "language" : "it-CH",
                "value" : "Tobramicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tobramycin"
              },
              {
                "language" : "en-US",
                "value" : "Tobramycine"
              }
            ]
          },
          {
            "code" : "444648007",
            "display" : "Tocilizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tocilizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "tocilizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Tocilizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Tocilizumab"
              },
              {
                "language" : "en-US",
                "value" : "Tocilizumab"
              }
            ]
          },
          {
            "code" : "386851002",
            "display" : "Tolcapone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tolcapon"
              },
              {
                "language" : "fr-CH",
                "value" : "tolcapone"
              },
              {
                "language" : "it-CH",
                "value" : "Tolcapone"
              },
              {
                "language" : "rm-CH",
                "value" : "Tolcapon"
              },
              {
                "language" : "en-US",
                "value" : "Tolcapone"
              }
            ]
          },
          {
            "code" : "703717006",
            "display" : "Tolperisone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tolperison"
              },
              {
                "language" : "fr-CH",
                "value" : "tolpérisone"
              },
              {
                "language" : "it-CH",
                "value" : "Tolperisone"
              },
              {
                "language" : "rm-CH",
                "value" : "Tolperison"
              },
              {
                "language" : "en-US",
                "value" : "Tolperisone"
              }
            ]
          },
          {
            "code" : "372570008",
            "display" : "Tolterodine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tolterodin"
              },
              {
                "language" : "fr-CH",
                "value" : "toltérodine"
              },
              {
                "language" : "it-CH",
                "value" : "Tolterodina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tolterodin"
              },
              {
                "language" : "en-US",
                "value" : "Tolterodine"
              }
            ]
          },
          {
            "code" : "443058000",
            "display" : "Tolvaptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tolvaptan"
              },
              {
                "language" : "fr-CH",
                "value" : "tolvaptan"
              },
              {
                "language" : "it-CH",
                "value" : "Tolvaptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Tolvaptan"
              },
              {
                "language" : "en-US",
                "value" : "Tolvaptan"
              }
            ]
          },
          {
            "code" : "386844006",
            "display" : "Topiramate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Topiramat"
              },
              {
                "language" : "fr-CH",
                "value" : "topiramate"
              },
              {
                "language" : "it-CH",
                "value" : "Topiramato"
              },
              {
                "language" : "rm-CH",
                "value" : "Topiramat"
              },
              {
                "language" : "en-US",
                "value" : "Topiramate"
              }
            ]
          },
          {
            "code" : "372536007",
            "display" : "Topotecan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Topotecan"
              },
              {
                "language" : "fr-CH",
                "value" : "topotécan"
              },
              {
                "language" : "it-CH",
                "value" : "Topotecan"
              },
              {
                "language" : "rm-CH",
                "value" : "Topotecan"
              },
              {
                "language" : "en-US",
                "value" : "Topotecan"
              }
            ]
          },
          {
            "code" : "108476002",
            "display" : "Torasemide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Torasemid"
              },
              {
                "language" : "fr-CH",
                "value" : "torasémide"
              },
              {
                "language" : "it-CH",
                "value" : "Torasemide"
              },
              {
                "language" : "rm-CH",
                "value" : "Torasemid"
              },
              {
                "language" : "en-US",
                "value" : "Torasemide"
              }
            ]
          },
          {
            "code" : "433127001",
            "display" : "Trabectedin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trabectedin"
              },
              {
                "language" : "fr-CH",
                "value" : "trabectédine"
              },
              {
                "language" : "it-CH",
                "value" : "Trabectedina"
              },
              {
                "language" : "rm-CH",
                "value" : "Trabectedin"
              },
              {
                "language" : "en-US",
                "value" : "Trabectedin"
              }
            ]
          },
          {
            "code" : "386858008",
            "display" : "Tramadol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tramadol"
              },
              {
                "language" : "fr-CH",
                "value" : "tramadol"
              },
              {
                "language" : "it-CH",
                "value" : "Tramadol"
              },
              {
                "language" : "rm-CH",
                "value" : "Tramadol"
              },
              {
                "language" : "en-US",
                "value" : "Tramadol"
              }
            ]
          },
          {
            "code" : "708711009",
            "display" : "Trametinib (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trametinib"
              },
              {
                "language" : "fr-CH",
                "value" : "tramétinib"
              },
              {
                "language" : "it-CH",
                "value" : "Trametinib"
              },
              {
                "language" : "rm-CH",
                "value" : "Trametinib"
              },
              {
                "language" : "en-US",
                "value" : "Trametinib"
              }
            ]
          },
          {
            "code" : "386871006",
            "display" : "Trandolapril (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trandolapril"
              },
              {
                "language" : "fr-CH",
                "value" : "trandolapril"
              },
              {
                "language" : "it-CH",
                "value" : "Trandolapril"
              },
              {
                "language" : "rm-CH",
                "value" : "Trandolapril"
              },
              {
                "language" : "en-US",
                "value" : "Trandolapril"
              }
            ]
          },
          {
            "code" : "386960009",
            "display" : "Tranexamic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tranexamsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide tranexamique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido tranexamico"
              },
              {
                "language" : "rm-CH",
                "value" : "Tranexamsäure"
              },
              {
                "language" : "en-US",
                "value" : "Tranexamic acid"
              }
            ]
          },
          {
            "code" : "372891006",
            "display" : "Tranylcypromine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tranylcypromin"
              },
              {
                "language" : "fr-CH",
                "value" : "tranylcypromine"
              },
              {
                "language" : "it-CH",
                "value" : "Tranilcipromina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tranylcypromin"
              },
              {
                "language" : "en-US",
                "value" : "Tranylcypromine"
              }
            ]
          },
          {
            "code" : "387003001",
            "display" : "Trastuzumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trastuzumab"
              },
              {
                "language" : "fr-CH",
                "value" : "trastuzumab"
              },
              {
                "language" : "it-CH",
                "value" : "Trastuzumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Trastuzumab"
              },
              {
                "language" : "en-US",
                "value" : "Trastuzumab"
              }
            ]
          },
          {
            "code" : "129493000",
            "display" : "Travoprost (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Travoprost"
              },
              {
                "language" : "fr-CH",
                "value" : "travoprost"
              },
              {
                "language" : "it-CH",
                "value" : "Travoprost"
              },
              {
                "language" : "rm-CH",
                "value" : "Travoprost"
              },
              {
                "language" : "en-US",
                "value" : "Travoprost"
              }
            ]
          },
          {
            "code" : "372829000",
            "display" : "Trazodone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trazodon"
              },
              {
                "language" : "fr-CH",
                "value" : "trazodone"
              },
              {
                "language" : "it-CH",
                "value" : "Trazodone"
              },
              {
                "language" : "rm-CH",
                "value" : "Trazodon"
              },
              {
                "language" : "en-US",
                "value" : "Trazodone"
              }
            ]
          },
          {
            "code" : "443570007",
            "display" : "Treprostinil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Treprostinil"
              },
              {
                "language" : "fr-CH",
                "value" : "tréprostinil"
              },
              {
                "language" : "it-CH",
                "value" : "Treprostinil"
              },
              {
                "language" : "rm-CH",
                "value" : "Treprostinil"
              },
              {
                "language" : "en-US",
                "value" : "Treprostinil"
              }
            ]
          },
          {
            "code" : "387305002",
            "display" : "Tretinoin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tretinoin"
              },
              {
                "language" : "fr-CH",
                "value" : "trétinoïne"
              },
              {
                "language" : "it-CH",
                "value" : "Tretinoina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tretinoin"
              },
              {
                "language" : "en-US",
                "value" : "Tretinoin"
              }
            ]
          },
          {
            "code" : "72993008",
            "display" : "Triacylglycerol lipase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lipase"
              },
              {
                "language" : "fr-CH",
                "value" : "lipase"
              },
              {
                "language" : "it-CH",
                "value" : "Lipasi"
              },
              {
                "language" : "rm-CH",
                "value" : "Lipase"
              },
              {
                "language" : "en-US",
                "value" : "Triacylglycerol lipase"
              }
            ]
          },
          {
            "code" : "116594009",
            "display" : "Triamcinolone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Triamcinolon"
              },
              {
                "language" : "fr-CH",
                "value" : "triamcinolone"
              },
              {
                "language" : "it-CH",
                "value" : "Triamcinolone"
              },
              {
                "language" : "rm-CH",
                "value" : "Triamcinolon"
              },
              {
                "language" : "en-US",
                "value" : "Triamcinolone"
              }
            ]
          },
          {
            "code" : "395913005",
            "display" : "Triamcinolone acetonide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Triamcinolon acetonid"
              },
              {
                "language" : "fr-CH",
                "value" : "triamcinolone acétonide"
              },
              {
                "language" : "it-CH",
                "value" : "Triamcinolone acetonide"
              },
              {
                "language" : "rm-CH",
                "value" : "Triamcinolon acetonid"
              },
              {
                "language" : "en-US",
                "value" : "Triamcinolone acetonide"
              }
            ]
          },
          {
            "code" : "386984001",
            "display" : "Triazolam (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Triazolam"
              },
              {
                "language" : "fr-CH",
                "value" : "triazolam"
              },
              {
                "language" : "it-CH",
                "value" : "Triazolam"
              },
              {
                "language" : "rm-CH",
                "value" : "Triazolam"
              },
              {
                "language" : "en-US",
                "value" : "Triazolam"
              }
            ]
          },
          {
            "code" : "387054001",
            "display" : "Triclosan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Triclosan"
              },
              {
                "language" : "fr-CH",
                "value" : "triclosan"
              },
              {
                "language" : "it-CH",
                "value" : "Triclosan"
              },
              {
                "language" : "rm-CH",
                "value" : "Triclosan"
              },
              {
                "language" : "en-US",
                "value" : "Triclosan"
              }
            ]
          },
          {
            "code" : "387179001",
            "display" : "Trimethoprim (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trimethoprim"
              },
              {
                "language" : "fr-CH",
                "value" : "triméthoprime"
              },
              {
                "language" : "it-CH",
                "value" : "Trimetoprim"
              },
              {
                "language" : "rm-CH",
                "value" : "Trimethoprim"
              },
              {
                "language" : "en-US",
                "value" : "Trimethoprim"
              }
            ]
          },
          {
            "code" : "373550009",
            "display" : "Trimipramine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trimipramin"
              },
              {
                "language" : "fr-CH",
                "value" : "trimipramine"
              },
              {
                "language" : "it-CH",
                "value" : "Trimipramina"
              },
              {
                "language" : "rm-CH",
                "value" : "Trimipramin"
              },
              {
                "language" : "en-US",
                "value" : "Trimipramine"
              }
            ]
          },
          {
            "code" : "395915003",
            "display" : "Triptorelin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Triptorelin"
              },
              {
                "language" : "fr-CH",
                "value" : "triptoréline"
              },
              {
                "language" : "it-CH",
                "value" : "Triptorelina"
              },
              {
                "language" : "rm-CH",
                "value" : "Triptorelin"
              },
              {
                "language" : "en-US",
                "value" : "Triptorelin"
              }
            ]
          },
          {
            "code" : "387526001",
            "display" : "Tropicamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tropicamid"
              },
              {
                "language" : "fr-CH",
                "value" : "tropicamide"
              },
              {
                "language" : "it-CH",
                "value" : "Tropicamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Tropicamid"
              },
              {
                "language" : "en-US",
                "value" : "Tropicamide"
              }
            ]
          },
          {
            "code" : "326557004",
            "display" : "Trospium chloride (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trospium chlorid"
              },
              {
                "language" : "fr-CH",
                "value" : "trospium chlorure"
              },
              {
                "language" : "it-CH",
                "value" : "Trospio cloruro"
              },
              {
                "language" : "rm-CH",
                "value" : "Trospium chlorid"
              },
              {
                "language" : "en-US",
                "value" : "Trospium chloride"
              }
            ]
          },
          {
            "code" : "54821000",
            "display" : "Tryptophan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tryptophan"
              },
              {
                "language" : "fr-CH",
                "value" : "tryptophane"
              },
              {
                "language" : "it-CH",
                "value" : "Triptofano"
              },
              {
                "language" : "rm-CH",
                "value" : "Tryptophan"
              },
              {
                "language" : "en-US",
                "value" : "Tryptophan"
              }
            ]
          },
          {
            "code" : "108731003",
            "display" : "Tuberculin purified protein derivative (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tuberkulin, gereinigtes PPD"
              },
              {
                "language" : "fr-CH",
                "value" : "tuberculine dérivé protéinique purifié"
              },
              {
                "language" : "it-CH",
                "value" : "Tubercolina derivato proteico purificato (PPD)"
              },
              {
                "language" : "rm-CH",
                "value" : "Tuberkulin, gereinigtes PPD"
              },
              {
                "language" : "en-US",
                "value" : "Tuberculin purified protein derivative"
              }
            ]
          },
          {
            "code" : "735055007",
            "display" : "Turoctocog alfa (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Turoctocog alfa"
              },
              {
                "language" : "fr-CH",
                "value" : "turoctocog alfa"
              },
              {
                "language" : "it-CH",
                "value" : "Turoctocog alfa"
              },
              {
                "language" : "rm-CH",
                "value" : "Turoctocog alfa"
              },
              {
                "language" : "en-US",
                "value" : "Turoctocog alfa"
              }
            ]
          },
          {
            "code" : "27378009",
            "display" : "Tyrosine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tyrosin"
              },
              {
                "language" : "fr-CH",
                "value" : "tyrosine"
              },
              {
                "language" : "it-CH",
                "value" : "Tirosina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tyrosin"
              },
              {
                "language" : "en-US",
                "value" : "Tyrosine"
              }
            ]
          },
          {
            "code" : "36661005",
            "display" : "Tyrothricin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tyrothricin"
              },
              {
                "language" : "fr-CH",
                "value" : "tyrothricine"
              },
              {
                "language" : "it-CH",
                "value" : "Tirotricina"
              },
              {
                "language" : "rm-CH",
                "value" : "Tyrothricin"
              },
              {
                "language" : "en-US",
                "value" : "Tyrothricin"
              }
            ]
          },
          {
            "code" : "703249005",
            "display" : "Ulipristal (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ulipristal"
              },
              {
                "language" : "fr-CH",
                "value" : "ulipristal"
              },
              {
                "language" : "it-CH",
                "value" : "Ulipristal"
              },
              {
                "language" : "rm-CH",
                "value" : "Ulipristal"
              },
              {
                "language" : "en-US",
                "value" : "Ulipristal"
              }
            ]
          },
          {
            "code" : "706898002",
            "display" : "Umeclidinium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Umeclidinium"
              },
              {
                "language" : "fr-CH",
                "value" : "uméclidinium"
              },
              {
                "language" : "it-CH",
                "value" : "Umeclidinio"
              },
              {
                "language" : "rm-CH",
                "value" : "Umeclidinium"
              },
              {
                "language" : "en-US",
                "value" : "Umeclidinium"
              }
            ]
          },
          {
            "code" : "698807007",
            "display" : "Urapidil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Urapidil"
              },
              {
                "language" : "fr-CH",
                "value" : "urapidil"
              },
              {
                "language" : "it-CH",
                "value" : "Urapidil"
              },
              {
                "language" : "rm-CH",
                "value" : "Urapidil"
              },
              {
                "language" : "en-US",
                "value" : "Urapidil"
              }
            ]
          },
          {
            "code" : "59082006",
            "display" : "Urokinase (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Urokinase"
              },
              {
                "language" : "fr-CH",
                "value" : "urokinase"
              },
              {
                "language" : "it-CH",
                "value" : "Urochinasi"
              },
              {
                "language" : "rm-CH",
                "value" : "Urokinase"
              },
              {
                "language" : "en-US",
                "value" : "Urokinase"
              }
            ]
          },
          {
            "code" : "41143004",
            "display" : "Ursodeoxycholic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ursodeoxycholsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide ursodésoxycholique"
              },
              {
                "language" : "it-CH",
                "value" : "Acido ursodesossicolico"
              },
              {
                "language" : "rm-CH",
                "value" : "Ursodeoxycholsäure"
              },
              {
                "language" : "en-US",
                "value" : "Ursodeoxycholic acid"
              }
            ]
          },
          {
            "code" : "443465002",
            "display" : "Ustekinumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ustekinumab"
              },
              {
                "language" : "fr-CH",
                "value" : "ustékinumab"
              },
              {
                "language" : "it-CH",
                "value" : "Ustekinumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Ustekinumab"
              },
              {
                "language" : "en-US",
                "value" : "Ustekinumab"
              }
            ]
          },
          {
            "code" : "96098007",
            "display" : "Valaciclovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Valaciclovir"
              },
              {
                "language" : "fr-CH",
                "value" : "valaciclovir"
              },
              {
                "language" : "it-CH",
                "value" : "Valaciclovir"
              },
              {
                "language" : "rm-CH",
                "value" : "Valaciclovir"
              },
              {
                "language" : "en-US",
                "value" : "Valaciclovir"
              }
            ]
          },
          {
            "code" : "412266000",
            "display" : "Valerian extract (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Baldrianwurzel-Extrakt"
              },
              {
                "language" : "fr-CH",
                "value" : "valériane extrait"
              },
              {
                "language" : "it-CH",
                "value" : "Valeriana estratto"
              },
              {
                "language" : "rm-CH",
                "value" : "Baldrianwurzel-Extrakt"
              },
              {
                "language" : "en-US",
                "value" : "Valerian extract"
              }
            ]
          },
          {
            "code" : "129476000",
            "display" : "Valganciclovir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Valganciclovir"
              },
              {
                "language" : "fr-CH",
                "value" : "valganciclovir"
              },
              {
                "language" : "it-CH",
                "value" : "Valganciclovit"
              },
              {
                "language" : "rm-CH",
                "value" : "Valganciclovir"
              },
              {
                "language" : "en-US",
                "value" : "Valganciclovir"
              }
            ]
          },
          {
            "code" : "72840006",
            "display" : "Valine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Valin"
              },
              {
                "language" : "fr-CH",
                "value" : "valine"
              },
              {
                "language" : "it-CH",
                "value" : "Valina"
              },
              {
                "language" : "rm-CH",
                "value" : "Valin"
              },
              {
                "language" : "en-US",
                "value" : "Valine"
              }
            ]
          },
          {
            "code" : "5641004",
            "display" : "Valproate semisodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Valproat seminatrium"
              },
              {
                "language" : "fr-CH",
                "value" : "valproate semisodique"
              },
              {
                "language" : "it-CH",
                "value" : "Valproato semisodico"
              },
              {
                "language" : "rm-CH",
                "value" : "Valproat seminatrium"
              },
              {
                "language" : "en-US",
                "value" : "Valproate semisodium"
              }
            ]
          },
          {
            "code" : "387481005",
            "display" : "Valproate sodium (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Valproat natrium"
              },
              {
                "language" : "fr-CH",
                "value" : "valproate sodique"
              },
              {
                "language" : "it-CH",
                "value" : "Valproato sodico"
              },
              {
                "language" : "rm-CH",
                "value" : "Valproat natrium"
              },
              {
                "language" : "en-US",
                "value" : "Valproate sodium"
              }
            ]
          },
          {
            "code" : "387080000",
            "display" : "Valproic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Valproinsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide valproïque"
              },
              {
                "language" : "it-CH",
                "value" : "Acido valproico"
              },
              {
                "language" : "rm-CH",
                "value" : "Valproinsäure"
              },
              {
                "language" : "en-US",
                "value" : "Valproic acid"
              }
            ]
          },
          {
            "code" : "386876001",
            "display" : "Valsartan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Valsartan"
              },
              {
                "language" : "fr-CH",
                "value" : "valsartan"
              },
              {
                "language" : "it-CH",
                "value" : "Valsartan"
              },
              {
                "language" : "rm-CH",
                "value" : "Valsartan"
              },
              {
                "language" : "en-US",
                "value" : "Valsartan"
              }
            ]
          },
          {
            "code" : "372735009",
            "display" : "Vancomycin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vancomycin"
              },
              {
                "language" : "fr-CH",
                "value" : "vancomycine"
              },
              {
                "language" : "it-CH",
                "value" : "Vancomicina"
              },
              {
                "language" : "rm-CH",
                "value" : "Vancomycin"
              },
              {
                "language" : "en-US",
                "value" : "Vancomycin"
              }
            ]
          },
          {
            "code" : "404858007",
            "display" : "Vardenafil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vardenafil"
              },
              {
                "language" : "fr-CH",
                "value" : "vardénafil"
              },
              {
                "language" : "it-CH",
                "value" : "Vardenafil"
              },
              {
                "language" : "rm-CH",
                "value" : "Vardenafil"
              },
              {
                "language" : "en-US",
                "value" : "Vardenafil"
              }
            ]
          },
          {
            "code" : "421772003",
            "display" : "Varenicline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vareniclin"
              },
              {
                "language" : "fr-CH",
                "value" : "varénicline"
              },
              {
                "language" : "it-CH",
                "value" : "Vareniclina"
              },
              {
                "language" : "rm-CH",
                "value" : "Vareniclin"
              },
              {
                "language" : "en-US",
                "value" : "Varenicline"
              }
            ]
          },
          {
            "code" : "259858000",
            "display" : "Varicella-zoster virus antibody (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Varizellen-Immunglobulin vom Menschen"
              },
              {
                "language" : "fr-CH",
                "value" : "immunoglobuline humaine antivaricelle"
              },
              {
                "language" : "it-CH",
                "value" : "Immunoglobulina umana antivaricella"
              },
              {
                "language" : "rm-CH",
                "value" : "Varizellen-Immunglobulin vom Menschen"
              },
              {
                "language" : "en-US",
                "value" : "Varicella-zoster virus antibody"
              }
            ]
          },
          {
            "code" : "87472002",
            "display" : "Vecuronium bromide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vecuronium bromid"
              },
              {
                "language" : "fr-CH",
                "value" : "vécuronium bromure"
              },
              {
                "language" : "it-CH",
                "value" : "Vecuronio bromuro"
              },
              {
                "language" : "rm-CH",
                "value" : "Vecuronium bromid"
              },
              {
                "language" : "en-US",
                "value" : "Vecuronium bromide"
              }
            ]
          },
          {
            "code" : "704256006",
            "display" : "Vedolizumab (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vedolizumab"
              },
              {
                "language" : "fr-CH",
                "value" : "védolizumab"
              },
              {
                "language" : "it-CH",
                "value" : "Vedolizumab"
              },
              {
                "language" : "rm-CH",
                "value" : "Vedolizumab"
              },
              {
                "language" : "en-US",
                "value" : "Vedolizumab"
              }
            ]
          },
          {
            "code" : "372490001",
            "display" : "Venlafaxine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Venlafaxin"
              },
              {
                "language" : "fr-CH",
                "value" : "venlafaxine"
              },
              {
                "language" : "it-CH",
                "value" : "Venlafaxina"
              },
              {
                "language" : "rm-CH",
                "value" : "Venlafaxin"
              },
              {
                "language" : "en-US",
                "value" : "Venlafaxine"
              }
            ]
          },
          {
            "code" : "372754009",
            "display" : "Verapamil (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Verapamil"
              },
              {
                "language" : "fr-CH",
                "value" : "vérapamil"
              },
              {
                "language" : "it-CH",
                "value" : "Verapamil"
              },
              {
                "language" : "rm-CH",
                "value" : "Verapamil"
              },
              {
                "language" : "en-US",
                "value" : "Verapamil"
              }
            ]
          },
          {
            "code" : "310283001",
            "display" : "Vigabatrin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vigabatrin"
              },
              {
                "language" : "fr-CH",
                "value" : "vigabatrine"
              },
              {
                "language" : "it-CH",
                "value" : "Vigabatrin"
              },
              {
                "language" : "rm-CH",
                "value" : "Vigabatrin"
              },
              {
                "language" : "en-US",
                "value" : "Vigabatrin"
              }
            ]
          },
          {
            "code" : "702408004",
            "display" : "Vilanterol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vilanterol"
              },
              {
                "language" : "fr-CH",
                "value" : "vilantérol"
              },
              {
                "language" : "it-CH",
                "value" : "Vilanterolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Vilanterol"
              },
              {
                "language" : "en-US",
                "value" : "Vilanterol"
              }
            ]
          },
          {
            "code" : "428611002",
            "display" : "Vildagliptin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vildagliptin"
              },
              {
                "language" : "fr-CH",
                "value" : "vildagliptine"
              },
              {
                "language" : "it-CH",
                "value" : "Vildagliptin"
              },
              {
                "language" : "rm-CH",
                "value" : "Vildagliptin"
              },
              {
                "language" : "en-US",
                "value" : "Vildagliptin"
              }
            ]
          },
          {
            "code" : "387051009",
            "display" : "Vinblastine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vinblastin"
              },
              {
                "language" : "fr-CH",
                "value" : "vinblastine"
              },
              {
                "language" : "it-CH",
                "value" : "Vinblastina"
              },
              {
                "language" : "rm-CH",
                "value" : "Vinblastin"
              },
              {
                "language" : "en-US",
                "value" : "Vinblastine"
              }
            ]
          },
          {
            "code" : "387126006",
            "display" : "Vincristine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vincristin"
              },
              {
                "language" : "fr-CH",
                "value" : "vincristine"
              },
              {
                "language" : "it-CH",
                "value" : "Vincristina"
              },
              {
                "language" : "rm-CH",
                "value" : "Vincristin"
              },
              {
                "language" : "en-US",
                "value" : "Vincristine"
              }
            ]
          },
          {
            "code" : "409198005",
            "display" : "Vindesine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vindesin"
              },
              {
                "language" : "fr-CH",
                "value" : "vindésine"
              },
              {
                "language" : "it-CH",
                "value" : "Vindesina"
              },
              {
                "language" : "rm-CH",
                "value" : "Vindesin"
              },
              {
                "language" : "en-US",
                "value" : "Vindesine"
              }
            ]
          },
          {
            "code" : "372541004",
            "display" : "Vinorelbine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vinorelbin"
              },
              {
                "language" : "fr-CH",
                "value" : "vinorelbine"
              },
              {
                "language" : "it-CH",
                "value" : "Vinorelbina"
              },
              {
                "language" : "rm-CH",
                "value" : "Vinorelbin"
              },
              {
                "language" : "en-US",
                "value" : "Vinorelbine"
              }
            ]
          },
          {
            "code" : "37237003",
            "display" : "Vitamin E (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tocopherol DL-alpha (E307)"
              },
              {
                "language" : "fr-CH",
                "value" : "tocophérol DL-alfa (E307)"
              },
              {
                "language" : "it-CH",
                "value" : "Alfa-Tocoferolo (vitamina E, E307)"
              },
              {
                "language" : "rm-CH",
                "value" : "Tocopherol DL-alpha (E307)"
              },
              {
                "language" : "en-US",
                "value" : "Vitamin E"
              }
            ]
          },
          {
            "code" : "385469007",
            "display" : "Voriconazole (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Voriconazol"
              },
              {
                "language" : "fr-CH",
                "value" : "voriconazole"
              },
              {
                "language" : "it-CH",
                "value" : "Voriconazolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Voriconazol"
              },
              {
                "language" : "en-US",
                "value" : "Voriconazole"
              }
            ]
          },
          {
            "code" : "708717008",
            "display" : "Vortioxetine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vortioxetin"
              },
              {
                "language" : "fr-CH",
                "value" : "vortioxétine"
              },
              {
                "language" : "it-CH",
                "value" : "Vortioxetina"
              },
              {
                "language" : "rm-CH",
                "value" : "Vortioxetin"
              },
              {
                "language" : "en-US",
                "value" : "Vortioxetine"
              }
            ]
          },
          {
            "code" : "372756006",
            "display" : "Warfarin (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Warfarin"
              },
              {
                "language" : "fr-CH",
                "value" : "warfarine"
              },
              {
                "language" : "it-CH",
                "value" : "Warfarin"
              },
              {
                "language" : "rm-CH",
                "value" : "Warfarin"
              },
              {
                "language" : "en-US",
                "value" : "Warfarin"
              }
            ]
          },
          {
            "code" : "372841007",
            "display" : "Xylometazoline (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Xylometazolin"
              },
              {
                "language" : "fr-CH",
                "value" : "xylométazoline"
              },
              {
                "language" : "it-CH",
                "value" : "Xilometazolina"
              },
              {
                "language" : "rm-CH",
                "value" : "Xylometazolin"
              },
              {
                "language" : "en-US",
                "value" : "Xylometazoline"
              }
            ]
          },
          {
            "code" : "387010007",
            "display" : "Zanamivir (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zanamivir"
              },
              {
                "language" : "fr-CH",
                "value" : "zanamivir"
              },
              {
                "language" : "it-CH",
                "value" : "Zanamivir"
              },
              {
                "language" : "rm-CH",
                "value" : "Zanamivir"
              },
              {
                "language" : "en-US",
                "value" : "Zanamivir"
              }
            ]
          },
          {
            "code" : "387151007",
            "display" : "Zidovudine (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zidovudin"
              },
              {
                "language" : "fr-CH",
                "value" : "zidovudine"
              },
              {
                "language" : "it-CH",
                "value" : "Zidovudina"
              },
              {
                "language" : "rm-CH",
                "value" : "Zidovudin"
              },
              {
                "language" : "en-US",
                "value" : "Zidovudine"
              }
            ]
          },
          {
            "code" : "725761005",
            "display" : "Zinc acetate dihydrate (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zinkdiacetat-2-Wasser"
              },
              {
                "language" : "fr-CH",
                "value" : "zinc acétate dihydrate"
              },
              {
                "language" : "it-CH",
                "value" : "Zinco acetato diidrato"
              },
              {
                "language" : "rm-CH",
                "value" : "Zinkdiacetat-2-Wasser"
              },
              {
                "language" : "en-US",
                "value" : "Zinc acetate dihydrate"
              }
            ]
          },
          {
            "code" : "255954005",
            "display" : "Zinc pyrithione (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pyrithion zink"
              },
              {
                "language" : "fr-CH",
                "value" : "pyrithione zinc"
              },
              {
                "language" : "it-CH",
                "value" : "Zinco piritione"
              },
              {
                "language" : "rm-CH",
                "value" : "Pyrithion zink"
              },
              {
                "language" : "en-US",
                "value" : "Zinc pyrithione"
              }
            ]
          },
          {
            "code" : "395926009",
            "display" : "Zoledronic acid (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zoledronsäure"
              },
              {
                "language" : "fr-CH",
                "value" : "acide zolédronique (zolédronate)"
              },
              {
                "language" : "it-CH",
                "value" : "Acido zoledronico"
              },
              {
                "language" : "rm-CH",
                "value" : "Zoledronsäure"
              },
              {
                "language" : "en-US",
                "value" : "Zoledronic acid"
              }
            ]
          },
          {
            "code" : "363582006",
            "display" : "Zolmitriptan (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zolmitriptan"
              },
              {
                "language" : "fr-CH",
                "value" : "zolmitriptan"
              },
              {
                "language" : "it-CH",
                "value" : "Zolmitriptan"
              },
              {
                "language" : "rm-CH",
                "value" : "Zolmitriptan"
              },
              {
                "language" : "en-US",
                "value" : "Zolmitriptan"
              }
            ]
          },
          {
            "code" : "387569009",
            "display" : "Zolpidem (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zolpidem"
              },
              {
                "language" : "fr-CH",
                "value" : "zolpidem"
              },
              {
                "language" : "it-CH",
                "value" : "Zolpidem"
              },
              {
                "language" : "rm-CH",
                "value" : "Zolpidem"
              },
              {
                "language" : "en-US",
                "value" : "Zolpidem"
              }
            ]
          },
          {
            "code" : "125693002",
            "display" : "Zonisamide (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zonisamid"
              },
              {
                "language" : "fr-CH",
                "value" : "zonisamide"
              },
              {
                "language" : "it-CH",
                "value" : "Zonisamide"
              },
              {
                "language" : "rm-CH",
                "value" : "Zonisamid"
              },
              {
                "language" : "en-US",
                "value" : "Zonisamide"
              }
            ]
          },
          {
            "code" : "395929002",
            "display" : "Zopiclone (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zopiclon"
              },
              {
                "language" : "fr-CH",
                "value" : "zopiclone"
              },
              {
                "language" : "it-CH",
                "value" : "Zopiclone"
              },
              {
                "language" : "rm-CH",
                "value" : "Zopiclon"
              },
              {
                "language" : "en-US",
                "value" : "Zopiclone"
              }
            ]
          },
          {
            "code" : "428715002",
            "display" : "Zuclopenthixol (substance)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zuclopenthixol"
              },
              {
                "language" : "fr-CH",
                "value" : "zuclopenthixol"
              },
              {
                "language" : "it-CH",
                "value" : "Zuclopentixolo"
              },
              {
                "language" : "rm-CH",
                "value" : "Zuclopenthixol"
              },
              {
                "language" : "en-US",
                "value" : "Zuclopenthixol"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
