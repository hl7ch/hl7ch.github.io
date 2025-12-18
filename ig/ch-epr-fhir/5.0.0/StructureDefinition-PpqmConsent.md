# CH PPQm Consent - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Consent**

## Resource Profile: CH PPQm Consent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmConsent |
| **Copyright/Legal**: CC0-1.0 | |

 
Swiss EPR Policy Set as a Consent 

**Usages:**

* Derived from this Profile: [EPR policy set based on template 201](StructureDefinition-PpqmConsentTemplate201.md), [EPR policy set based on template 202](StructureDefinition-PpqmConsentTemplate202.md), [EPR policy set based on template 203](StructureDefinition-PpqmConsentTemplate203.md), [EPR policy set based on template 301](StructureDefinition-PpqmConsentTemplate301.md)...Show 3 more,[EPR policy set based on template 302](StructureDefinition-PpqmConsentTemplate302.md),[EPR policy set based on template 303](StructureDefinition-PpqmConsentTemplate303.md)and[EPR policy set based on template 304](StructureDefinition-PpqmConsentTemplate304.md)
* Use this Profile: [CH PPQm Feed Request Bundle](StructureDefinition-PpqmFeedRequestBundle.md) and [CH PPQm Retrieve Response Bundle](StructureDefinition-PpqmRetrieveResponseBundle.md)
* CapabilityStatements using this Profile: [PPQm Policy Repository (server)](CapabilityStatement-CH.PPQm.PolicyRepository.md) and [PPQm Policy Source and Consumer (client)](CapabilityStatement-CH.PPQm.PolicySourceConsumer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/PpqmConsent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PpqmConsent.csv), [Excel](StructureDefinition-PpqmConsent.xlsx), [Schematron](StructureDefinition-PpqmConsent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PpqmConsent",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent",
  "version" : "5.0.0",
  "name" : "PpqmConsent",
  "title" : "CH PPQm Consent",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Swiss EPR Policy Set as a Consent",
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
      "identity" : "ppqm-consent-xacml20-mapping",
      "uri" : "http://docs.oasis-open.org/xacml/2.0",
      "name" : "CH:PPQ XACML 2.0 Policy Set"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Consent",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Consent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Consent",
        "path" : "Consent",
        "constraint" : [
          {
            "key" : "ch-epr-ppqm-template-structure",
            "severity" : "error",
            "human" : "The resource shall correspond to one of official policy set templates",
            "expression" : "conformsTo('http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate201') or\n                 conformsTo('http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate202') or\n                 conformsTo('http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate203') or\n                 conformsTo('http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate301') or\n                 conformsTo('http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate302') or\n                 conformsTo('http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate303') or\n                 conformsTo('http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsentTemplate304')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent"
          }
        ],
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "PolicySet"
          }
        ]
      },
      {
        "id" : "Consent.identifier",
        "path" : "Consent.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type.coding"
            }
          ],
          "description" : "PpqmConsent Identifiers",
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Consent.identifier.value",
        "path" : "Consent.identifier.value",
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/@PolicySetId"
          }
        ]
      },
      {
        "id" : "Consent.identifier:policySetId",
        "path" : "Consent.identifier",
        "sliceName" : "policySetId",
        "short" : "UUID of the Policy Set",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Consent.identifier:policySetId.use",
        "path" : "Consent.identifier.use",
        "max" : "0"
      },
      {
        "id" : "Consent.identifier:policySetId.type",
        "path" : "Consent.identifier.type",
        "min" : 1
      },
      {
        "id" : "Consent.identifier:policySetId.type.coding",
        "path" : "Consent.identifier.type.coding",
        "min" : 1,
        "max" : "1",
        "patternCoding" : {
          "system" : "http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmConsentIdentifierType",
          "code" : "policySetId"
        }
      },
      {
        "id" : "Consent.identifier:policySetId.system",
        "path" : "Consent.identifier.system",
        "max" : "0"
      },
      {
        "id" : "Consent.identifier:policySetId.value",
        "path" : "Consent.identifier.value",
        "short" : "UUID of the policy set in URN format",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-epr-ppqm-uuid-format",
            "severity" : "error",
            "human" : "The policy set ID must be a UUID in URN format",
            "expression" : "lower().matches('^urn:uuid:[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent"
          }
        ]
      },
      {
        "id" : "Consent.identifier:policySetId.period",
        "path" : "Consent.identifier.period",
        "max" : "0"
      },
      {
        "id" : "Consent.identifier:policySetId.assigner",
        "path" : "Consent.identifier.assigner",
        "max" : "0"
      },
      {
        "id" : "Consent.identifier:templateId",
        "path" : "Consent.identifier",
        "sliceName" : "templateId",
        "short" : "Template ID of the policy set",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Consent.identifier:templateId.use",
        "path" : "Consent.identifier.use",
        "max" : "0"
      },
      {
        "id" : "Consent.identifier:templateId.type",
        "path" : "Consent.identifier.type",
        "min" : 1
      },
      {
        "id" : "Consent.identifier:templateId.type.coding",
        "path" : "Consent.identifier.type.coding",
        "min" : 1,
        "max" : "1",
        "patternCoding" : {
          "system" : "http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmConsentIdentifierType",
          "code" : "templateId"
        }
      },
      {
        "id" : "Consent.identifier:templateId.system",
        "path" : "Consent.identifier.system",
        "max" : "0"
      },
      {
        "id" : "Consent.identifier:templateId.value",
        "path" : "Consent.identifier.value",
        "short" : "Template ID of the policy set",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmPolicySetTemplateId"
        }
      },
      {
        "id" : "Consent.identifier:templateId.period",
        "path" : "Consent.identifier.period",
        "max" : "0"
      },
      {
        "id" : "Consent.identifier:templateId.assigner",
        "path" : "Consent.identifier.assigner",
        "max" : "0"
      },
      {
        "id" : "Consent.status",
        "path" : "Consent.status",
        "short" : "Fixed status value",
        "patternCode" : "active"
      },
      {
        "id" : "Consent.scope",
        "path" : "Consent.scope",
        "short" : "Fixed scope value",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/consentscope",
              "code" : "patient-privacy"
            }
          ]
        }
      },
      {
        "id" : "Consent.scope.coding",
        "path" : "Consent.scope.coding",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Consent.category",
        "path" : "Consent.category",
        "short" : "Fixed category value",
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
              "code" : "INFA"
            }
          ]
        }
      },
      {
        "id" : "Consent.category.coding",
        "path" : "Consent.category.coding",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Consent.patient",
        "path" : "Consent.patient",
        "min" : 1
      },
      {
        "id" : "Consent.patient.identifier",
        "path" : "Consent.patient.identifier",
        "min" : 1,
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-spid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Consent.patient.identifier.use",
        "path" : "Consent.patient.identifier.use",
        "max" : "0"
      },
      {
        "id" : "Consent.patient.identifier.type",
        "path" : "Consent.patient.identifier.type",
        "max" : "0"
      },
      {
        "id" : "Consent.patient.identifier.system",
        "path" : "Consent.patient.identifier.system",
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Resources/Resource/ResourceMatch/AttributeValue/InstanceIdentifier/@root"
          }
        ]
      },
      {
        "id" : "Consent.patient.identifier.value",
        "path" : "Consent.patient.identifier.value",
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Resources/Resource/ResourceMatch/AttributeValue/InstanceIdentifier/@extension"
          }
        ]
      },
      {
        "id" : "Consent.patient.identifier.period",
        "path" : "Consent.patient.identifier.period",
        "max" : "0"
      },
      {
        "id" : "Consent.patient.identifier.assigner",
        "path" : "Consent.patient.identifier.assigner",
        "max" : "0"
      },
      {
        "id" : "Consent.patient.display",
        "path" : "Consent.patient.display",
        "max" : "0"
      },
      {
        "id" : "Consent.dateTime",
        "path" : "Consent.dateTime",
        "max" : "0"
      },
      {
        "id" : "Consent.performer",
        "path" : "Consent.performer",
        "max" : "0"
      },
      {
        "id" : "Consent.organization",
        "path" : "Consent.organization",
        "max" : "0"
      },
      {
        "id" : "Consent.source[x]",
        "path" : "Consent.source[x]",
        "max" : "0"
      },
      {
        "id" : "Consent.policy",
        "path" : "Consent.policy",
        "max" : "0"
      },
      {
        "id" : "Consent.policyRule",
        "path" : "Consent.policyRule",
        "short" : "ID of the referenced basis policy set",
        "min" : 1
      },
      {
        "id" : "Consent.policyRule.coding",
        "path" : "Consent.policyRule.coding",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Consent.policyRule.coding.system",
        "path" : "Consent.policyRule.coding.system",
        "min" : 1
      },
      {
        "id" : "Consent.policyRule.coding.version",
        "path" : "Consent.policyRule.coding.version",
        "max" : "0"
      },
      {
        "id" : "Consent.policyRule.coding.code",
        "path" : "Consent.policyRule.coding.code",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/PolicySetIdReference"
          }
        ]
      },
      {
        "id" : "Consent.policyRule.coding.userSelected",
        "path" : "Consent.policyRule.coding.userSelected",
        "max" : "0"
      },
      {
        "id" : "Consent.verification",
        "path" : "Consent.verification",
        "max" : "0"
      },
      {
        "id" : "Consent.provision",
        "path" : "Consent.provision",
        "min" : 1
      },
      {
        "id" : "Consent.provision.type",
        "path" : "Consent.provision.type",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.period.start",
        "path" : "Consent.provision.period.start",
        "short" : "Start date of the policy set validity, yyyy-mm-dd",
        "constraint" : [
          {
            "key" : "ch-epr-ppqm-date-format",
            "severity" : "error",
            "human" : "Timestamp must have precision of days, i.e. not contain the time part",
            "expression" : "toString().matches('^[0-9]{4}-[0-9]{2}-[0-9]{2}$')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent"
          }
        ],
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Environments/Environment/EnvironmentMatch[@MatchId='urn:oasis:names:tc:xacml:1.0:function:date-less-than-or-equal']/AtributeValue"
          }
        ]
      },
      {
        "id" : "Consent.provision.period.end",
        "path" : "Consent.provision.period.end",
        "short" : "End date of the policy set validity, yyyy-mm-dd",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-epr-ppqm-date-format",
            "severity" : "error",
            "human" : "Timestamp must have precision of days, i.e. not contain the time part",
            "expression" : "toString().matches('^[0-9]{4}-[0-9]{2}-[0-9]{2}$')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent"
          }
        ],
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Environments/Environment/EnvironmentMatch[@MatchId='urn:oasis:names:tc:xacml:1.0:function:date-greater-than-or-equal']/AtributeValue"
          }
        ]
      },
      {
        "id" : "Consent.provision.actor",
        "path" : "Consent.provision.actor",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Consent.provision.actor.role",
        "path" : "Consent.provision.actor.role",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/EprRole"
        }
      },
      {
        "id" : "Consent.provision.actor.role.coding.system",
        "path" : "Consent.provision.actor.role.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Subjects/Subject/SubjectMatch[SubjectAttributeDesignator/@AttributeId='urn:oasis:names:tc:xacml:2.0:subject:role']/AttributeValue/CodedValue/@codeSystem"
          }
        ]
      },
      {
        "id" : "Consent.provision.actor.role.coding.code",
        "path" : "Consent.provision.actor.role.coding.code",
        "short" : "EPR actor role code",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Subjects/Subject/SubjectMatch[SubjectAttributeDesignator/@AttributeId='urn:oasis:names:tc:xacml:2.0:subject:role']/AttributeValue/CodedValue/@code"
          }
        ]
      },
      {
        "id" : "Consent.provision.actor.reference.identifier",
        "path" : "Consent.provision.actor.reference.identifier",
        "short" : "This element is present only in policy sets which reference a particular healthcare professional, group of healthcare professionals, patient, or representative"
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.use",
        "path" : "Consent.provision.actor.reference.identifier.use",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type",
        "path" : "Consent.provision.actor.reference.identifier.type",
        "min" : 1
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type.coding",
        "path" : "Consent.provision.actor.reference.identifier.type.coding",
        "min" : 1,
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PpqmActorIdentifierType"
        }
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type.coding.system",
        "path" : "Consent.provision.actor.reference.identifier.type.coding.system",
        "min" : 1
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type.coding.version",
        "path" : "Consent.provision.actor.reference.identifier.type.coding.version",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type.coding.code",
        "path" : "Consent.provision.actor.reference.identifier.type.coding.code",
        "short" : "Actor identifier type code (name qualifier)",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Subjects/Subject/SubjectMatch[SubjectAttributeDesignator/@AttributeId='urn:oasis:names:tc:xacml:1.0:subject:subject-id-qualifier']/AttributeValue",
            "comment" : "if NOT equal to 'urn:oasis:names:tc:xspa:1.0:subject:organization-id'"
          }
        ]
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type.coding.userSelected",
        "path" : "Consent.provision.actor.reference.identifier.type.coding.userSelected",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.type.text",
        "path" : "Consent.provision.actor.reference.identifier.type.text",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.value",
        "path" : "Consent.provision.actor.reference.identifier.value",
        "short" : "ID of an healthcare professional, group of healthcare professionals, patient, or representative",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Subjects/Subject/SubjectMatch[SubjectAttributeDesignator/@AttributeId='urn:oasis:names:tc:xacml:1.0:subject:subject-id']/AttributeValue",
            "comment" : "if identifier.type is NOT equal to 'urn:oasis:names:tc:xspa:1.0:subject:organization-id'"
          },
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Subjects/Subject/SubjectMatch[SubjectAttributeDesignator/@AttributeId='urn:oasis:names:tc:xspa:1.0:subject:organization-id']/AttributeValue",
            "comment" : "if identifier.type is equal to 'urn:oasis:names:tc:xspa:1.0:subject:organization-id'"
          }
        ]
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.period",
        "path" : "Consent.provision.actor.reference.identifier.period",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.actor.reference.identifier.assigner",
        "path" : "Consent.provision.actor.reference.identifier.assigner",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.actor.reference.display",
        "path" : "Consent.provision.actor.reference.display",
        "short" : "This element is present only in policy sets which reference indefinite sets of actors"
      },
      {
        "id" : "Consent.provision.action",
        "path" : "Consent.provision.action",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.securityLabel",
        "path" : "Consent.provision.securityLabel",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.purpose",
        "path" : "Consent.provision.purpose",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/EprPurposeOfUse"
        }
      },
      {
        "id" : "Consent.provision.purpose.system",
        "path" : "Consent.provision.purpose.system",
        "min" : 1,
        "patternUri" : "urn:oid:2.16.756.5.30.1.127.3.10.5",
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Subjects/Subject/SubjectMatch[SubjectAttributeDesignator/@AttributeId='urn:oasis:names:tc:xspa:1.0:subject:purposeofuse']/AttributeValue/CodedValue/@codeSystem"
          }
        ]
      },
      {
        "id" : "Consent.provision.purpose.code",
        "path" : "Consent.provision.purpose.code",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ppqm-consent-xacml20-mapping",
            "map" : "/PolicySet/Target/Subjects/Subject/SubjectMatch[SubjectAttributeDesignator/@AttributeId='urn:oasis:names:tc:xspa:1.0:subject:purposeofuse']/AttributeValue/CodedValue/@code"
          }
        ]
      },
      {
        "id" : "Consent.provision.class",
        "path" : "Consent.provision.class",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.code",
        "path" : "Consent.provision.code",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.dataPeriod",
        "path" : "Consent.provision.dataPeriod",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.data",
        "path" : "Consent.provision.data",
        "max" : "0"
      },
      {
        "id" : "Consent.provision.provision",
        "path" : "Consent.provision.provision",
        "max" : "0"
      }
    ]
  }
}

```
