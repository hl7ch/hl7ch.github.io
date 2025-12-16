# CH Core Organization - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Organization**

## Resource Profile: CH Core Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreOrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Organization resource for use in Swiss specific use cases. 

**Usages:**

* Derived from this Profile: [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md)
* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core Claim](StructureDefinition-ch-core-claim.md), [CH Core Composition](StructureDefinition-ch-core-composition.md), [CH Core Coverage](StructureDefinition-ch-core-coverage.md), [CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md)...Show 13 more,[CH Core Encounter](StructureDefinition-ch-core-encounter.md),[CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md),[CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md),[CH Core Immunization](StructureDefinition-ch-core-immunization.md),[CH Core Location](StructureDefinition-ch-core-location.md),[CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md),[CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md),[CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md),[CH Core PractitionerRole](StructureDefinition-ch-core-practitionerrole.md),[CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md),[Biller](StructureDefinition-ch-ext-biller.md),[EPR Information Recipient](StructureDefinition-ch-ext-epr-informationrecipient.md)and[Responsible](StructureDefinition-ch-ext-responsible.md)
* Examples for this Profile: [Biller AG](Organization-ClaimBiller.md), [Klinik für Psychiatrie](Organization-ClaimProvider.md), [Gruppenpraxis CH](Organization-GruppenpraxisCH.md), [Gruppenpraxis CH](Organization-ImmunizationOrganizationExample.md)...Show 3 more,[Physiotherapie CH](Organization-PhysiotherapieCH.md),[RoDiag Radiologieinstitut](Organization-Radiologieinstitut.md)and[Spital Seeblick](Organization-SpitalSeeblick.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-organization.csv), [Excel](StructureDefinition-ch-core-organization.xlsx), [Schematron](StructureDefinition-ch-core-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-organization",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
  "version" : "6.0.0",
  "name" : "CHCoreOrganization",
  "title" : "CH Core Organization",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Base definition of the Organization resource for use in Swiss specific use cases.",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "short" : "CH Core Organization"
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Organization.identifier:BER",
        "path" : "Organization.identifier",
        "sliceName" : "BER",
        "short" : "BER (Business and Enterprise Register), BUR (Betriebs- und Unternehmensregister), REE (Registre des entreprises et des établissements), RIS (Registro delle imprese e degli stabilimenti)",
        "definition" : "See [BER](http://fhir.ch/ig/ch-term/NamingSystem/ber)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ber-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.45"
        }
      },
      {
        "id" : "Organization.identifier:UIDB",
        "path" : "Organization.identifier",
        "sliceName" : "UIDB",
        "short" : "UIDB (Unique Identification Business), UID (Verwendung der Unternehmens-Identifikationsnummer), IDE (Utilisation du numéro d'identification des entreprises), IDI (Utilizzo del numero d'identificazione delle imprese)",
        "definition" : "See [UIDB](http://fhir.ch/ig/ch-term/NamingSystem/uidb)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-uidb-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.35"
        }
      },
      {
        "id" : "Organization.identifier:ZSR",
        "path" : "Organization.identifier",
        "sliceName" : "ZSR",
        "short" : "ZSR (Zahlstellenregister), RCC (Registre des codes-créanciers), RCC (Registro dei codici creditori)",
        "definition" : "See [ZSR/RCC](http://fhir.ch/ig/ch-term/NamingSystem/zsr)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-zsr-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
        }
      },
      {
        "id" : "Organization.identifier:GLN",
        "path" : "Organization.identifier",
        "sliceName" : "GLN",
        "short" : "Global Location Number (GLN)",
        "definition" : "See [GLN](http://fhir.ch/ig/ch-term/NamingSystem/gln)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-gln-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.51.1.3"
        }
      },
      {
        "id" : "Organization.type",
        "path" : "Organization.type",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.healthcareFacilityTypeCode"
        }
      },
      {
        "id" : "Organization.telecom",
        "path" : "Organization.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: Contact"
          }
        ]
      },
      {
        "id" : "Organization.telecom.system",
        "path" : "Organization.telecom.system",
        "min" : 1
      },
      {
        "id" : "Organization.telecom.value",
        "path" : "Organization.telecom.value",
        "min" : 1
      },
      {
        "id" : "Organization.telecom:email",
        "path" : "Organization.telecom",
        "sliceName" : "email",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-email"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: email"
          }
        ]
      },
      {
        "id" : "Organization.telecom:phone",
        "path" : "Organization.telecom",
        "sliceName" : "phone",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: phone"
          }
        ]
      },
      {
        "id" : "Organization.telecom:internet",
        "path" : "Organization.telecom",
        "sliceName" : "internet",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-internet"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0046: internet"
          }
        ]
      },
      {
        "id" : "Organization.address",
        "path" : "Organization.address",
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address"
            ]
          }
        ]
      }
    ]
  }
}

```
