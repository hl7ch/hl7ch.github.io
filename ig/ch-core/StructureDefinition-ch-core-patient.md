# CH Core Patient - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Patient**

## Resource Profile: CH Core Patient 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCorePatient |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Patient resource for use in Swiss specific use cases. Relevant are definitions by the eCH-0010 V7.0 data standard mailing address and eCH-0011 V8.1 data standard personal data. The CH Core Patient is based upon the core FHIR Patient Resource and designed to meet the applicable patient demographic data elements in Switzerland. See also[BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.html)for further information 

 
Core patient demographics which can be shared 

**Usages:**

* Derived from this Profile: [CH Core Patient EPR](StructureDefinition-ch-core-patient-epr.md)
* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core AllergyIntolerance](StructureDefinition-ch-core-allergyintolerance.md), [CH Core Claim](StructureDefinition-ch-core-claim.md), [CH Core Composition](StructureDefinition-ch-core-composition.md), [CH Core Condition](StructureDefinition-ch-core-condition.md)...Show 14 more,[CH Core Coverage](StructureDefinition-ch-core-coverage.md),[CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md),[CH Core Encounter](StructureDefinition-ch-core-encounter.md),[CH Core EPR-Consent](StructureDefinition-ch-core-epr-consent.md),[CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md),[CH Core Immunization](StructureDefinition-ch-core-immunization.md),[CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md),[CH Core MedicationDispense](StructureDefinition-ch-core-medicationdispense.md),[CH Core MedicationRequest](StructureDefinition-ch-core-medicationrequest.md),[CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md),[CH Core RelatedPerson](StructureDefinition-ch-core-relatedperson.md),[CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md),[Author of the content](StructureDefinition-ch-ext-author.md)and[EPR Information Recipient](StructureDefinition-ch-ext-epr-informationrecipient.md)
* Examples for this Profile: [Patient/ClaimPatient](Patient-ClaimPatient.md), [Patient/ElisabethBroennimannByBFH](Patient-ElisabethBroennimannByBFH.md), [Patient/FranzMuster](Patient-FranzMuster.md), [Patient/ImmunizationPatientExample](Patient-ImmunizationPatientExample.md)...Show 5 more,[Patient/ManuelaMuster](Patient-ManuelaMuster.md),[Patient/MarvinMuster](Patient-MarvinMuster.md),[Patient/MaxMuster](Patient-MaxMuster.md),[Patient/PersonEch011](Patient-PersonEch011.md)and[Patient/UpiEprTestKrcmarevic](Patient-UpiEprTestKrcmarevic.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-patient.csv), [Excel](StructureDefinition-ch-core-patient.xlsx), [Schematron](StructureDefinition-ch-core-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-patient",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
  "version" : "6.0.0",
  "name" : "CHCorePatient",
  "title" : "CH Core Patient",
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
  "description" : "Base definition of the Patient resource for use in Swiss specific use cases. Relevant are definitions by the eCH-0010 V7.0 data standard mailing address and eCH-0011 V8.1 data standard personal data.\nThe CH Core Patient is based upon the core FHIR Patient Resource and designed to meet the applicable patient demographic data elements in Switzerland. \nSee also [BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.html) for further information",
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
  "purpose" : "Core patient demographics which can be shared",
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient",
        "short" : "CH Core Patient",
        "definition" : "The CH Core Patient is based upon the core FHIR Patient Resource and designed to meet the applicable patient demographic data elements in Switzerland. See also https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.html for further information",
        "constraint" : [
          {
            "key" : "ch-pat-1",
            "severity" : "warning",
            "human" : "If one ore more human names are provided, at least one human name should have a family and a given name.",
            "expression" : "name.where(family.exists() and given.exists()).count()>0 or name.empty()",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
          },
          {
            "key" : "ch-pat-2",
            "severity" : "warning",
            "human" : "gender 'unknown' is currently not used in Switzerland in eCH and the EPR",
            "expression" : "gender.empty() or gender!='unknown'",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
          }
        ]
      },
      {
        "id" : "Patient.extension",
        "path" : "Patient.extension",
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
        "id" : "Patient.extension:placeOfBirth",
        "path" : "Patient.extension",
        "sliceName" : "placeOfBirth",
        "short" : "Place of birth of the patient",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeofbirth"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: placeOfBirth BFS-322, BFS-323, BFS 324"
          }
        ]
      },
      {
        "id" : "Patient.extension:placeOfOrigin",
        "path" : "Patient.extension",
        "sliceName" : "placeOfOrigin",
        "short" : "Place of origin(s) of the patient",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: placeOfOrigin, BFS-42"
          }
        ]
      },
      {
        "id" : "Patient.extension:citizenship",
        "path" : "Patient.extension",
        "sliceName" : "citizenship",
        "short" : "Information on nationality data (eCH: Staatsangehörigkeit/Nationalité) of the patient",
        "definition" : "The content of the country code element (if present) SHALL be selected EITHER from ValueSet ISO Country Alpha-2 http://hl7.org/fhir/ValueSet/iso3166-1-2 OR MAY be selected from ISO Country Alpha-3 Value Set http://hl7.org/fhir/ValueSet/iso3166-1-3, if the country is not specified in value Set ISO Country Alpha-2 http://hl7.org/fhir/ValueSet/iso3166-1-2.",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/patient-citizenship|5.3.0-ballot-tc1"
            ]
          }
        ],
        "constraint" : [
          {
            "key" : "ch-pat-3",
            "severity" : "warning",
            "human" : "ISO Country Alpha-2 or ISO Country Alpha-3 code",
            "expression" : "((extension.where(url='code').value.coding.code.length()=2) and extension.where(url='code').value.coding.code.memberOf('http://hl7.org/fhir/ValueSet/iso3166-1-2')) or ((extension.where(url='code').value.coding.code.length() = 3) and extension.where(url='code').value.coding.code.memberOf('http://hl7.org/fhir/ValueSet/iso3166-1-3'))",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: nationalityData - Staatsangehörigkeit/Nationalité"
          }
        ]
      },
      {
        "id" : "Patient.extension:religion",
        "path" : "Patient.extension",
        "sliceName" : "religion",
        "short" : "Religion of the patient",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/patient-religion|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: religion, BFS-711"
          }
        ]
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
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
        "id" : "Patient.identifier:EPR-SPID",
        "path" : "Patient.identifier",
        "sliceName" : "EPR-SPID",
        "short" : "EPR-SPID",
        "definition" : "EPR-SPID: The Central Compensation Office (ZAS; CCO) assigns and manages the new patient identification number according to the EPRA (EPR-SPID), which is only linked internally in the CCO with the AHV number. It maintains the UPI identification database (Unique Personal Identifier Database), which the EPR communities may access. The law regulates how the the EPR-SPID can be used. SR 816.111 states (Art. 10 para. 3 EPDV) that communities must ensure that the EPR-SPID number cannot be not stored in document repositories or document registries.",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-spid-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3"
        }
      },
      {
        "id" : "Patient.identifier:AHVN13",
        "path" : "Patient.identifier",
        "sliceName" : "AHVN13",
        "short" : "AHVN13 / NAVS13 of the patient (13 digits starting with 756, no separation points)",
        "definition" : "The AHVN13 / NAVS13 - (abbreviation for new thirteen-digit Social Security number) - is an administrative identifier for natural persons in Switzerland. It is issued, announced and administered by the Central Compensation Office. It is available to all organisations and communities for which there is a legal basis.",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ahvn13-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.32"
        }
      },
      {
        "id" : "Patient.identifier:LocalPid",
        "path" : "Patient.identifier",
        "sliceName" : "LocalPid",
        "short" : "Local patient identifier(s)",
        "min" : 0,
        "max" : "*",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "MR"
              }
            ]
          }
        }
      },
      {
        "id" : "Patient.identifier:LocalPid.system",
        "path" : "Patient.identifier.system",
        "min" : 1
      },
      {
        "id" : "Patient.identifier:LocalPid.value",
        "path" : "Patient.identifier.value",
        "min" : 1
      },
      {
        "id" : "Patient.identifier:insuranceCardNumber",
        "path" : "Patient.identifier",
        "sliceName" : "insuranceCardNumber",
        "short" : "Insurance card number of the patient (20 digits)",
        "definition" : "Cardnumber Swiss insurance card v1",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-veka-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1"
        }
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "type" : [
          {
            "code" : "HumanName",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: nameData"
          }
        ]
      },
      {
        "id" : "Patient.telecom",
        "path" : "Patient.telecom",
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
          },
          {
            "identity" : "v2",
            "map" : "-> as of HL7 v2.7 PID-40 (leave PID-13 and PID-14 empty)"
          }
        ]
      },
      {
        "id" : "Patient.telecom.system",
        "path" : "Patient.telecom.system",
        "min" : 1
      },
      {
        "id" : "Patient.telecom.value",
        "path" : "Patient.telecom.value",
        "min" : 1
      },
      {
        "id" : "Patient.telecom:email",
        "path" : "Patient.telecom",
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
        "id" : "Patient.telecom:phone",
        "path" : "Patient.telecom",
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
        "id" : "Patient.telecom:internet",
        "path" : "Patient.telecom",
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
        "id" : "Patient.gender",
        "path" : "Patient.gender",
        "short" : "male | female | other | unknown* (* see warning 'ch-pat-2')",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: sex. sexType, BFS-33, see ConceptMap http://fhir.ch/ig/ch-core/ConceptMap/sex-ech11-to-fhir"
          }
        ]
      },
      {
        "id" : "Patient.birthDate",
        "path" : "Patient.birthDate",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: birthData, BFS-31"
          }
        ]
      },
      {
        "id" : "Patient.deceased[x]",
        "path" : "Patient.deceased[x]",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: deathData, deathPeriod, dateFrom, BFS-361"
          }
        ]
      },
      {
        "id" : "Patient.address",
        "path" : "Patient.address",
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address"
            ]
          }
        ]
      },
      {
        "id" : "Patient.maritalStatus",
        "path" : "Patient.maritalStatus",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-maritalstatus"
        },
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: maritalData, BFS-341, see ConceptMap http://fhir.ch/ig/ch-core/ConceptMap/maritalstatus-ech11-to-fhir"
          }
        ]
      },
      {
        "id" : "Patient.maritalStatus.extension:maritalDataSeparation",
        "path" : "Patient.maritalStatus.extension",
        "sliceName" : "maritalDataSeparation",
        "short" : "MaritalData Separation",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-maritaldata-separation"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: separation - Trennung BFS-343"
          }
        ]
      },
      {
        "id" : "Patient.contact",
        "path" : "Patient.contact",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "relationship"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.contact:contact",
        "path" : "Patient.contact",
        "sliceName" : "contact",
        "short" : "Contact data if it is not the address of the patient",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: contactData, BFS-61"
          }
        ]
      },
      {
        "id" : "Patient.contact:contact.relationship",
        "path" : "Patient.contact.relationship",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11",
              "code" : "contactData"
            }
          ]
        }
      },
      {
        "id" : "Patient.contact:contact.telecom",
        "path" : "Patient.contact.telecom",
        "max" : "0"
      },
      {
        "id" : "Patient.contact:contact.address",
        "path" : "Patient.contact.address",
        "min" : 1,
        "type" : [
          {
            "code" : "Address",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address-ech-10"
            ]
          }
        ]
      },
      {
        "id" : "Patient.contact:nameOfParent",
        "path" : "Patient.contact",
        "sliceName" : "nameOfParent",
        "short" : "Name of parent",
        "min" : 0,
        "max" : "*",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0021: nameOfParent"
          }
        ]
      },
      {
        "id" : "Patient.contact:nameOfParent.relationship",
        "path" : "Patient.contact.relationship",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
              "code" : "PRN"
            }
          ]
        }
      },
      {
        "id" : "Patient.contact:nameOfParent.name",
        "path" : "Patient.contact.name",
        "min" : 1
      },
      {
        "id" : "Patient.communication",
        "path" : "Patient.communication",
        "mapping" : [
          {
            "identity" : "eCH",
            "map" : "eCH-0011: languageOfCorrespondence: de, fr, it, rm = Rhaeto-Romance, en, other languages ISO 639-1"
          }
        ]
      }
    ]
  }
}

```
