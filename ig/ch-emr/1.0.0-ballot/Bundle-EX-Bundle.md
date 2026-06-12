# EX-Bundle - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Bundle**

## Example Bundle: EX-Bundle



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "EX-Bundle",
  "meta" : {
    "lastUpdated" : "2024-09-10T10:00:00+02:00",
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-bundle"]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609"
  },
  "type" : "document",
  "timestamp" : "2025-09-10T08:00:00+02:00",
  "entry" : [{
    "fullUrl" : "http://fhir.ch/ig/emr/Composition/EX-Composition",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "EX-Composition",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
      },
      "language" : "de-CH",
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de-CH\" lang=\"de-CH\"><a name=\"Composition_EX-Composition\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Composition EX-Composition</b></p><a name=\"EX-Composition\"> </a><a name=\"hcEX-Composition\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\">Language: de-CH</p><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-composition.html\">CH Emergency Record Composition</a></p></div><p><b>identifier</b>: <a href=\"http://terminology.hl7.org/7.1.0/NamingSystem-uri.html\" title=\"As defined by RFC 3986 (http://www.ietf.org/rfc/rfc3986.txt)(with many schemes defined in many RFCs). For OIDs and UUIDs, use the URN form (urn:oid:(note: lowercase) and urn:uuid:). See http://www.ietf.org/rfc/rfc3001.txt and http://www.ietf.org/rfc/rfc4122.txt \r\n\r\nThis oid is used as an identifier II.root to indicate the the extension is an absolute URI (technically, an IRI). Typically, this is used for OIDs and GUIDs. Note that when this OID is used with OIDs and GUIDs, the II.extension should start with urn:oid or urn:uuid: \r\n\r\nNote that this OID is created to aid with interconversion between CDA and FHIR - FHIR uses urn:ietf:rfc:3986 as equivalent to this OID. URIs as identifiers appear more commonly in FHIR.\r\n\r\nThis OID may also be used in CD.codeSystem.\">Uniform Resource Identifier (URI)</a>/urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609</p><p><b>status</b>: Final</p><p><b>type</b>: <span title=\"Codes:{http://loinc.org 60591-5}\">Patient summary Document</span></p><p><b>date</b>: 2025-09-10 08:00:00+0200</p><p><b>author</b>: <a href=\"PractitionerRole-EX-PractitionerRole.html\">PractitionerRole Physician</a></p><p><b>title</b>: Elektronischer Notfallpass - Maria Schmidt</p><p><b>confidentiality</b>: normal</p></div>"
      },
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609"
      },
      "status" : "final",
      "type" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "60591-5"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "date" : "2025-09-10T08:00:00+02:00",
      "author" : [{
        "reference" : "PractitionerRole/EX-PractitionerRole"
      }],
      "title" : "Elektronischer Notfallpass - Maria Schmidt",
      "confidentiality" : "N",
      "_confidentiality" : {
        "extension" : [{
          "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
          "valueCodeableConcept" : {
            "coding" : [{
              "system" : "http://snomed.info/sct",
              "version" : "http://snomed.info/sct/2011000195101",
              "code" : "17621005"
            }]
          }
        }]
      },
      "section" : [{
        "title" : "Notfallkontakte",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "56864-2"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Peter Schmidt (Ehemann) +41 44 321 65 87</p></div>"
        },
        "entry" : [{
          "reference" : "RelatedPerson/EX-RelatedPerson"
        }]
      },
      {
        "title" : "Behandelnde Gesundheitsfachperson",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "85847-2"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Dr. med. SarahHuber - Gynecologist (GLN: 7601007922000)</p></div>"
        },
        "entry" : [{
          "reference" : "Practitioner/EX-Practitioner"
        }]
      },
      {
        "title" : "Reanimation",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "100822-6"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Reanimationsstatus:</p><ul><li>For attempted cardiopulmonary resuscitation</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Observation/EX-Resuscitation"
        }]
      },
      {
        "title" : "Medikation",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "10160-0"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Metformin 500mg 1-0-1</li></ul></div>"
        },
        "entry" : [{
          "reference" : "MedicationStatement/EX-MedicationStatement"
        }]
      },
      {
        "title" : "Impfungen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "11369-6"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>COVID-19: 12.09.2024</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Immunization/EX-Immunization"
        }]
      },
      {
        "title" : "Allergien und Unverträglichkeiten",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "48765-2"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Kontrastmittelallergie</li></ul></div>"
        },
        "entry" : [{
          "reference" : "AllergyIntolerance/EX-AllergyIntolerance"
        }]
      },
      {
        "title" : "Risikofaktoren für Behandelnde",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "46467-7"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Viral hepatitis type B</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Flag/EX-RiskFactor"
        }]
      },
      {
        "title" : "Problemliste",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "11450-4"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Diabetes mellitus Typ 2</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Condition/EX-Condition"
        }]
      },
      {
        "title" : "Patientenverfügung und Ärztliche Notfallanordnungen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "42348-3"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Patientenverfügung:</p><ul><li>Patientenverfügung im Schlafzimmer</li></ul></div>"
        },
        "entry" : [{
          "reference" : "DocumentReference/EX-AdvanceDirective"
        }]
      },
      {
        "title" : "Andere Dokumente",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "55108-5"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Organspendeausweis: Organspendeausweis ist im Portemonnaie</li></ul></div>"
        },
        "entry" : [{
          "reference" : "DocumentReference/EX-DocumentReferences"
        }]
      },
      {
        "title" : "Implantate",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "46264-8"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Implantate:</p><ul><li>Herzschrittmacher</li></ul></div>"
        },
        "entry" : [{
          "reference" : "DeviceUseStatement/EX-DeviceUseStatement"
        }]
      },
      {
        "title" : "Schwangerschaft",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "10162-6"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Schwangerschaft:</p><ul><li>Ja</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Observation/EX-Pregnancy"
        }]
      },
      {
        "title" : "Kognitive Beeinträchtigungen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "66610-7"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Demenz</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Observation/EX-CognitiveDisability"
        }]
      },
      {
        "title" : "Physische Beeinträchtigungen",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "96386-8"
          }]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Gehbehinderung</li></ul></div>"
        },
        "entry" : [{
          "reference" : "Observation/EX-PhysicalDisability"
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Patient/EX-Patient",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "EX-Patient",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_EX-Patient\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient EX-Patient</b></p><a name=\"EX-Patient\"> </a><a name=\"hcEX-Patient\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html\">CH IPS Patient</a></p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Ways to contact the Patient\">Contact Detail</td><td colspan=\"3\"><ul><li><a href=\"tel:+41321234567\">+41 32 123 45 67</a></li><li><a href=\"tel:+41795856543\">+41 79 585 65 43</a></li><li><a href=\"mailto:anna.schmidt@example.ch\">anna.schmidt@example.ch</a></li><li>Musterstrasse 123 Zürich 8001 CH </li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Language spoken\">Language:</td><td colspan=\"3\"><span title=\"Codes:{urn:ietf:bcp:47 de}\">German</span> (preferred)</td></tr></table></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
        "value" : "80756015090002647590"
      }],
      "name" : [{
        "family" : "Schmidt",
        "given" : ["Anna"]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 32 123 45 67",
        "use" : "home"
      },
      {
        "system" : "phone",
        "value" : "+41 79 585 65 43",
        "use" : "mobile"
      },
      {
        "system" : "email",
        "value" : "anna.schmidt@example.ch"
      }],
      "gender" : "female",
      "birthDate" : "1992-03-15",
      "address" : [{
        "line" : ["Musterstrasse 123"],
        "city" : "Zürich",
        "postalCode" : "8001",
        "country" : "CH"
      }],
      "communication" : [{
        "language" : {
          "coding" : [{
            "system" : "urn:ietf:bcp:47",
            "code" : "de"
          }]
        },
        "preferred" : true
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/RelatedPerson/EX-RelatedPerson",
    "resource" : {
      "resourceType" : "RelatedPerson",
      "id" : "EX-RelatedPerson",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"RelatedPerson_EX-RelatedPerson\"> </a><p class=\"res-header-id\"><b>Generated Narrative: RelatedPerson EX-RelatedPerson</b></p><a name=\"EX-RelatedPerson\"> </a><a name=\"hcEX-RelatedPerson\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-relatedperson.html\">CH Emergency Record RelatedPerson</a></p></div><p><b>active</b>: true</p><p><b>patient</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>relationship</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-RoleCode HUSB}\">husband</span></p><p><b>name</b>: Peter Schmidt (Official)</p><p><b>telecom</b>: <a href=\"tel:+41443216587\">+41 44 321 65 87</a>, <a href=\"tel:+41798765432\">+41 79 876 54 32</a>, <a href=\"mailto:peter.schmidt@example.ch\">peter.schmidt@example.ch</a></p><p><b>gender</b>: Male</p><p><b>birthDate</b>: 1975-09-22</p><p><b>address</b>: Musterstrasse 123 Zürich 8001 CH (home)</p><h3>Communications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Language</b></td><td><b>Preferred</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{urn:ietf:bcp:47 de}\">German</span></td><td>true</td></tr></table></div>"
      },
      "active" : true,
      "patient" : {
        "reference" : "Patient/EX-Patient"
      },
      "relationship" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
          "code" : "HUSB",
          "display" : "husband"
        }]
      }],
      "name" : [{
        "use" : "official",
        "family" : "Schmidt",
        "given" : ["Peter"]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 44 321 65 87",
        "use" : "home",
        "rank" : 1
      },
      {
        "system" : "phone",
        "value" : "+41 79 876 54 32",
        "use" : "mobile",
        "rank" : 2
      },
      {
        "system" : "email",
        "value" : "peter.schmidt@example.ch",
        "use" : "home"
      }],
      "gender" : "male",
      "birthDate" : "1975-09-22",
      "address" : [{
        "use" : "home",
        "line" : ["Musterstrasse 123"],
        "city" : "Zürich",
        "postalCode" : "8001",
        "country" : "CH"
      }],
      "communication" : [{
        "language" : {
          "coding" : [{
            "system" : "urn:ietf:bcp:47",
            "code" : "de"
          }]
        },
        "preferred" : true
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Practitioner/EX-Practitioner",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "EX-Practitioner",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_EX-Practitioner\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner EX-Practitioner</b></p><a name=\"EX-Practitioner\"> </a><a name=\"hcEX-Practitioner\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitioner.html\">CH IPS Practitioner</a></p></div><p><b>identifier</b>: <a href=\"http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-gln.html\" title=\"Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).\">GLN</a>/7601007922000</p><p><b>name</b>: Sarah Huber (Official)</p><p><b>telecom</b>: <a href=\"tel:+41612652525\">+41 61 265 25 25</a>, <a href=\"mailto:s.huber@gynpraxis-basel.ch\">s.huber@gynpraxis-basel.ch</a></p><p><b>address</b>: Petersgraben 4 Basel 4051 CH </p><p><b>gender</b>: Female</p><h3>Qualifications</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Code</b></td><td><b>Period</b></td><td><b>Issuer</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 394586005}\">Gynäkologie und Geburtshilfe</span></td><td>2005-01-01 --&gt; (ongoing)</td><td>Schweizerische Gesellschaft für Gynäkologie und Geburtshilfe (SGGG)</td></tr></table></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601007922000"
      }],
      "name" : [{
        "use" : "official",
        "family" : "Huber",
        "given" : ["Sarah"],
        "prefix" : ["Dr. med."],
        "_prefix" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
            "valueCode" : "AC"
          }]
        }]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 61 265 25 25",
        "use" : "work"
      },
      {
        "system" : "email",
        "value" : "s.huber@gynpraxis-basel.ch",
        "use" : "work"
      }],
      "address" : [{
        "line" : ["Petersgraben 4"],
        "city" : "Basel",
        "postalCode" : "4051",
        "country" : "CH"
      }],
      "gender" : "female",
      "qualification" : [{
        "code" : {
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/2011000195101",
            "code" : "394586005"
          }],
          "text" : "Gynäkologie und Geburtshilfe"
        },
        "period" : {
          "start" : "2005-01-01"
        },
        "issuer" : {
          "display" : "Schweizerische Gesellschaft für Gynäkologie und Geburtshilfe (SGGG)"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Organization/EX-Organization-GynPraxis",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "EX-Organization-GynPraxis",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_EX-Organization-GynPraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization EX-Organization-GynPraxis</b></p><a name=\"EX-Organization-GynPraxis\"> </a><a name=\"hcEX-Organization-GynPraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-organization.html\">CH IPS Organization</a></p></div><p><b>identifier</b>: <a href=\"http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-gln.html\" title=\"Each healthcare partner (natural or legal person) is referenced with a unique code of type GLN (former name: EAN code) of the [GS1](https://www.gs1.ch/de/home) system, see [refdata](https://www.refdata.ch/).\">GLN</a>/7601009110849</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 394579002}\">Gynäkologische Praxis</span></p><p><b>name</b>: Gynäkologie Praxis Basel</p><p><b>telecom</b>: <a href=\"tel:+41612652525\">+41 61 265 25 25</a>, <a href=\"mailto:info@gynpraxis-basel.ch\">info@gynpraxis-basel.ch</a>, <a href=\"https://www.gynpraxis-basel.ch\">https://www.gynpraxis-basel.ch</a></p><p><b>address</b>: Gynäkologie Praxis Basel Petersgraben 4 Basel 4051 CH </p></div>"
      },
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601009110849"
      }],
      "type" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "394579002"
        }],
        "text" : "Gynäkologische Praxis"
      }],
      "name" : "Gynäkologie Praxis Basel",
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 61 265 25 25",
        "use" : "work"
      },
      {
        "system" : "email",
        "value" : "info@gynpraxis-basel.ch",
        "use" : "work"
      },
      {
        "system" : "url",
        "value" : "https://www.gynpraxis-basel.ch",
        "use" : "work"
      }],
      "address" : [{
        "line" : ["Gynäkologie Praxis Basel", "Petersgraben 4"],
        "city" : "Basel",
        "postalCode" : "4051",
        "country" : "CH"
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/PractitionerRole/EX-PractitionerRole",
    "resource" : {
      "resourceType" : "PractitionerRole",
      "id" : "EX-PractitionerRole",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_EX-PractitionerRole\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole EX-PractitionerRole</b></p><a name=\"EX-PractitionerRole\"> </a><a name=\"hcEX-PractitionerRole\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitionerrole.html\">CH IPS PractitionerRole</a></p></div><p><b>active</b>: true</p><p><b>practitioner</b>: <a href=\"Practitioner-EX-Practitioner.html\">Dr. med. Sarah Huber</a></p><p><b>organization</b>: <a href=\"Organization-EX-Organization-GynPraxis.html\">Gynäkologie Praxis Basel</a></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 309343006}\">Ärztin</span></p><p><b>specialty</b>: <span title=\"Codes:{http://snomed.info/sct 394586005}\">Gynäkologie und Geburtshilfe</span></p><p><b>telecom</b>: <a href=\"tel:+41612652525\">+41 61 265 25 25</a>, <a href=\"mailto:s.huber@gynpraxis-basel.ch\">s.huber@gynpraxis-basel.ch</a></p></div>"
      },
      "active" : true,
      "practitioner" : {
        "reference" : "Practitioner/EX-Practitioner",
        "display" : "Dr. med. Sarah Huber"
      },
      "organization" : {
        "reference" : "Organization/EX-Organization-GynPraxis",
        "display" : "Gynäkologie Praxis Basel"
      },
      "code" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "309343006"
        }],
        "text" : "Ärztin"
      }],
      "specialty" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "394586005"
        }],
        "text" : "Gynäkologie und Geburtshilfe"
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 61 265 25 25",
        "use" : "work"
      },
      {
        "system" : "email",
        "value" : "s.huber@gynpraxis-basel.ch",
        "use" : "work"
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Observation/EX-Resuscitation",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "EX-Resuscitation",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-resuscitation-status"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Observation_EX-Resuscitation\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation EX-Resuscitation</b></p><a name=\"EX-Resuscitation\"> </a><a name=\"hcEX-Resuscitation\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-observation-resuscitation-status.html\">CH Emergency Record Observation Resuscitation Status</a></p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 304251008}\">Resuscitation status</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>effective</b>: 2025-10-08</p><p><b>performer</b>: <a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></p><p><b>value</b>: <span title=\"Codes:{http://snomed.info/sct 450475007}\">For cardiopulmonary resuscitation</span></p><p><b>derivedFrom</b>: <a href=\"DocumentReference-EX-AdvanceDirective.html\">DocumentReference: status = current; type = Advance directive; category = Advance directive report; date = 2024-01-15 14:30:00+0100; description = Patientenverfügung im Schlafzimmer</a></p></div>"
      },
      "status" : "final",
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "304251008"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "effectiveDateTime" : "2025-10-08",
      "performer" : [{
        "reference" : "Practitioner/EX-Practitioner"
      }],
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "450475007"
        }]
      },
      "derivedFrom" : [{
        "reference" : "DocumentReference/EX-AdvanceDirective"
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Medication/EX-Metformin",
    "resource" : {
      "resourceType" : "Medication",
      "id" : "EX-Metformin",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medication"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Medication_EX-Metformin\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Medication EX-Metformin</b></p><a name=\"EX-Metformin\"> </a><a name=\"hcEX-Metformin\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medication.html\">CH IPS Medication</a></p></div><p><b>code</b>: <span title=\"Codes:{urn:oid:2.51.1.1 7680590990115}\">METFORMIN Axapharm Filmtabl 500 mg</span></p><p><b>form</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 10219000}\">Tablette</span></p><p><b>amount</b>: 50 Tablet (unit of presentation)<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = 'Tablet (unit of presentation)')</span>/1 Package - unit of product usage (qualifier value)<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code1681000175101 = 'Package - unit of product usage')</span></p></div>"
      },
      "code" : {
        "coding" : [{
          "system" : "urn:oid:2.51.1.1",
          "code" : "7680590990115",
          "display" : "METFORMIN Axapharm Filmtabl 500 mg (Blister 50 Stk)"
        }],
        "text" : "METFORMIN Axapharm Filmtabl 500 mg"
      },
      "form" : {
        "coding" : [{
          "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
          "code" : "10219000",
          "display" : "Tablet"
        }],
        "text" : "Tablette"
      },
      "amount" : {
        "numerator" : {
          "value" : 50,
          "unit" : "Tablet (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Package - unit of product usage (qualifier value)",
          "system" : "http://snomed.info/sct",
          "code" : "1681000175101"
        }
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/MedicationStatement/EX-MedicationStatement",
    "resource" : {
      "resourceType" : "MedicationStatement",
      "id" : "EX-MedicationStatement",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"MedicationStatement_EX-MedicationStatement\"> </a><p class=\"res-header-id\"><b>Generated Narrative: MedicationStatement EX-MedicationStatement</b></p><a name=\"EX-MedicationStatement\"> </a><a name=\"hcEX-MedicationStatement\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-medicationstatement.html\">CH IPS MedicationStatement</a></p></div><p><b>status</b>: Active</p><p><b>medication</b>: <a href=\"Medication-EX-Metformin.html\">Medication METFORMIN Axapharm Filmtabl 500 mg (Blister 50 Stk)</a></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>effective</b>: 2020-03-03 --&gt; (ongoing)</p><p><b>reasonCode</b>: <span title=\"Codes:\">Diabetes</span></p><blockquote><p><b>dosage</b></p><p><b>patientInstruction</b>: Unzerkaut während oder nach den Mahlzeiten mit ausreichend Flüssigkeit einnehmen</p><p><b>timing</b>: Morning, Evening, Once</p><p><b>route</b>: <span title=\"Codes:{urn:oid:0.4.0.127.0.16.1.1.2.1 20053000}\">zum Einnehmen</span></p><h3>DoseAndRates</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Dose[x]</b></td></tr><tr><td style=\"display: none\">*</td><td>1 Tablet (unit of presentation)<span style=\"background: LightGoldenRodYellow\"> (Details: SNOMED CT  code732936001 = 'Tablet (unit of presentation)')</span></td></tr></table></blockquote></div>"
      },
      "status" : "active",
      "medicationReference" : {
        "reference" : "Medication/EX-Metformin"
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "effectivePeriod" : {
        "start" : "2020-03-03"
      },
      "reasonCode" : [{
        "text" : "Diabetes"
      }],
      "dosage" : [{
        "patientInstruction" : "Unzerkaut während oder nach den Mahlzeiten mit ausreichend Flüssigkeit einnehmen",
        "timing" : {
          "repeat" : {
            "boundsPeriod" : {
              "start" : "2020-03-03"
            },
            "when" : ["MORN", "EVE"]
          }
        },
        "route" : {
          "coding" : [{
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "20053000",
            "display" : "Oral use"
          }],
          "text" : "zum Einnehmen"
        },
        "doseAndRate" : [{
          "doseQuantity" : {
            "value" : 1,
            "unit" : "Tablet (unit of presentation)",
            "system" : "http://snomed.info/sct",
            "code" : "732936001"
          }
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Immunization/EX-Immunization",
    "resource" : {
      "resourceType" : "Immunization",
      "id" : "EX-Immunization",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-immunization"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Immunization_EX-Immunization\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Immunization EX-Immunization</b></p><a name=\"EX-Immunization\"> </a><a name=\"hcEX-Immunization\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-immunization.html\">CH IPS Immunization</a></p></div><p><b>status</b>: Completed</p><p><b>vaccineCode</b>: <span title=\"Codes:{http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs 69465}\">Spikevax XBB.1.5 0.10 mg/ml</span></p><p><b>patient</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>occurrence</b>: 2024-09-12 14:15:00+0200</p><p><b>lotNumber</b>: SPX24XBB002</p><h3>Performers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Actor</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></td></tr></table><h3>ProtocolApplieds</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>TargetDisease</b></td><td><b>DoseNumber[x]</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 840539006}\">Disease caused by 2019 novel coronavirus</span></td><td>6</td></tr></table></div>"
      },
      "status" : "completed",
      "vaccineCode" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
          "code" : "69465",
          "display" : "Spikevax XBB.1.5 0.10 mg/ml"
        }]
      },
      "patient" : {
        "reference" : "Patient/EX-Patient"
      },
      "occurrenceDateTime" : "2024-09-12T14:15:00+02:00",
      "lotNumber" : "SPX24XBB002",
      "performer" : [{
        "actor" : {
          "reference" : "Practitioner/EX-Practitioner"
        }
      }],
      "protocolApplied" : [{
        "targetDisease" : [{
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/2011000195101",
            "code" : "840539006"
          }]
        }],
        "doseNumberPositiveInt" : 6
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/AllergyIntolerance/EX-AllergyIntolerance",
    "resource" : {
      "resourceType" : "AllergyIntolerance",
      "id" : "EX-AllergyIntolerance",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"AllergyIntolerance_EX-AllergyIntolerance\"> </a><p class=\"res-header-id\"><b>Generated Narrative: AllergyIntolerance EX-AllergyIntolerance</b></p><a name=\"EX-AllergyIntolerance\"> </a><a name=\"hcEX-AllergyIntolerance\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-allergyintolerance.html\">CH IPS AllergyIntolerance</a></p></div><p><b>clinicalStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical active}\">Active</span></p><p><b>verificationStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/allergyintolerance-verification confirmed}\">Confirmed</span></p><p><b>type</b>: Allergy</p><p><b>category</b>: Medication</p><p><b>criticality</b>: High Risk</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 293637006}\">Contrast media allergy</span></p><p><b>patient</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>onset</b>: 2018-05-20</p><p><b>recordedDate</b>: 2025-01-15</p><p><b>recorder</b>: <a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></p><p><b>asserter</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><blockquote><p><b>reaction</b></p><p><b>substance</b>: <span title=\"Codes:{http://snomed.info/sct 293637006}\">Contrast media allergy</span></p><p><b>manifestation</b>: <span title=\"Codes:{http://snomed.info/sct 271807003}\">Eruption</span>, <span title=\"Codes:{http://snomed.info/sct 418363000}\">Itching of skin (finding)</span>, <span title=\"Codes:{http://snomed.info/sct 23924001}\">Pressure in chest</span></p><p><b>severity</b>: Moderate</p><p><b>note</b>: </p><blockquote><div><p>Hautausschlag mit Juckreiz und leichte Atembeschwerden. Behandlung mit Antihistaminika und Kortison erfolgreich.</p>\n</div></blockquote></blockquote></div>"
      },
      "clinicalStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
          "code" : "active"
        }]
      },
      "verificationStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-verification",
          "code" : "confirmed"
        }]
      },
      "type" : "allergy",
      "category" : ["medication"],
      "criticality" : "high",
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "293637006"
        }]
      },
      "patient" : {
        "reference" : "Patient/EX-Patient"
      },
      "onsetDateTime" : "2018-05-20",
      "recordedDate" : "2025-01-15",
      "recorder" : {
        "reference" : "Practitioner/EX-Practitioner"
      },
      "asserter" : {
        "reference" : "Patient/EX-Patient"
      },
      "reaction" : [{
        "substance" : {
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/2011000195101",
            "code" : "293637006"
          }]
        },
        "manifestation" : [{
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/2011000195101",
            "code" : "271807003"
          }]
        },
        {
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/2011000195101",
            "code" : "418363000"
          }]
        },
        {
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/2011000195101",
            "code" : "23924001"
          }]
        }],
        "severity" : "moderate",
        "note" : [{
          "text" : "Hautausschlag mit Juckreiz und leichte Atembeschwerden. Behandlung mit Antihistaminika und Kortison erfolgreich."
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Flag/EX-RiskFactor",
    "resource" : {
      "resourceType" : "Flag",
      "id" : "EX-RiskFactor",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Flag_EX-RiskFactor\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Flag EX-RiskFactor</b></p><a name=\"EX-RiskFactor\"> </a><a name=\"hcEX-RiskFactor\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.html\">CH Emergency Record Risk to Healthcare Personnel</a></p></div><p><b>status</b>: Active</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/flag-category safety}\">Safety</span></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 66071002}\">Type B viral hepatitis</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p></div>"
      },
      "status" : "active",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/flag-category",
          "code" : "safety",
          "display" : "Safety"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "66071002"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Condition/EX-Condition",
    "resource" : {
      "resourceType" : "Condition",
      "id" : "EX-Condition",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Condition_EX-Condition\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Condition EX-Condition</b></p><a name=\"EX-Condition\"> </a><a name=\"hcEX-Condition\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html\">CH IPS Condition</a></p></div><p><b>clinicalStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-clinical active}\">Active</span></p><p><b>verificationStatus</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-ver-status confirmed}\">Confirmed</span></p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/condition-category problem-list-item}\">Problem List Item</span></p><p><b>severity</b>: <span title=\"Codes:{http://snomed.info/sct 24484000}\">Severe</span></p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 44054006}\">Diabetes mellitus type II</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>onset</b>: 2010-04-15</p><p><b>recordedDate</b>: 2010-04-15</p><p><b>recorder</b>: <a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></p><p><b>asserter</b>: <a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></p></div>"
      },
      "clinicalStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
          "code" : "active"
        }]
      },
      "verificationStatus" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
          "code" : "confirmed"
        }]
      },
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item",
          "display" : "Problem List Item"
        }]
      }],
      "severity" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "24484000"
        }]
      },
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "44054006"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "onsetDateTime" : "2010-04-15",
      "recordedDate" : "2010-04-15",
      "recorder" : {
        "reference" : "Practitioner/EX-Practitioner"
      },
      "asserter" : {
        "reference" : "Practitioner/EX-Practitioner"
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/DocumentReference/EX-AdvanceDirective",
    "resource" : {
      "resourceType" : "DocumentReference",
      "id" : "EX-AdvanceDirective",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DocumentReference_EX-AdvanceDirective\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DocumentReference EX-AdvanceDirective</b></p><a name=\"EX-AdvanceDirective\"> </a><a name=\"hcEX-AdvanceDirective\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-documentreference-advance-directive.html\">CH Emergency Record Advance Directive DocumentReference</a></p></div><p><b>status</b>: Current</p><p><b>type</b>: <span title=\"Codes:{http://loinc.org 75320-2}\">Advance directive</span></p><p><b>category</b>: <span title=\"Codes:{http://snomed.info/sct 371538006}\">Advance directive report</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>date</b>: 2024-01-15 14:30:00+0100</p><p><b>description</b>: Patientenverfügung im Schlafzimmer</p><blockquote><p><b>content</b></p><h3>Attachments</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>ContentType</b></td><td><b>Url</b></td></tr><tr><td style=\"display: none\">*</td><td>application/pdf</td><td><a href=\"https://example.org/documents/EX-AdvanceDirective.pdf\">https://example.org/documents/EX-AdvanceDirective.pdf</a></td></tr></table></blockquote></div>"
      },
      "status" : "current",
      "type" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "75320-2"
        }]
      },
      "category" : [{
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "371538006"
        }]
      }],
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "date" : "2024-01-15T14:30:00+01:00",
      "description" : "Patientenverfügung im Schlafzimmer",
      "content" : [{
        "attachment" : {
          "contentType" : "application/pdf",
          "url" : "https://example.org/documents/EX-AdvanceDirective.pdf"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/DocumentReference/EX-DocumentReferences",
    "resource" : {
      "resourceType" : "DocumentReference",
      "id" : "EX-DocumentReferences",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DocumentReference_EX-DocumentReferences\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DocumentReference EX-DocumentReferences</b></p><a name=\"EX-DocumentReferences\"> </a><a name=\"hcEX-DocumentReferences\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-documentreference.html\">CH Emergency Record DocumentReference</a></p></div><p><b>status</b>: Current</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 772790007}\">Organ donor card</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>date</b>: 2025-07-15 14:30:00+0200</p><p><b>author</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>description</b>: Organspendeausweis ist im Protmonnaie</p><blockquote><p><b>content</b></p><h3>Attachments</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>ContentType</b></td></tr><tr><td style=\"display: none\">*</td><td>application/pdf</td></tr></table></blockquote></div>"
      },
      "status" : "current",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "772790007"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "date" : "2025-07-15T14:30:00+02:00",
      "author" : [{
        "reference" : "Patient/EX-Patient"
      }],
      "description" : "Organspendeausweis ist im Protmonnaie",
      "content" : [{
        "attachment" : {
          "contentType" : "application/pdf"
        }
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Device/EX-MedicalDevice",
    "resource" : {
      "resourceType" : "Device",
      "id" : "EX-MedicalDevice",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-device"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Device_EX-MedicalDevice\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Device EX-MedicalDevice</b></p><a name=\"EX-MedicalDevice\"> </a><a name=\"hcEX-MedicalDevice\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-device.html\">CH Emergency Record Device</a></p></div><p><b>status</b>: Active</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 14106009}\">Cardiac pacemaker</span></p><p><b>patient</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p></div>"
      },
      "status" : "active",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "14106009"
        }]
      },
      "patient" : {
        "reference" : "Patient/EX-Patient"
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/DeviceUseStatement/EX-DeviceUseStatement",
    "resource" : {
      "resourceType" : "DeviceUseStatement",
      "id" : "EX-DeviceUseStatement",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-deviceusestatement"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"DeviceUseStatement_EX-DeviceUseStatement\"> </a><p class=\"res-header-id\"><b>Generated Narrative: DeviceUseStatement EX-DeviceUseStatement</b></p><a name=\"EX-DeviceUseStatement\"> </a><a name=\"hcEX-DeviceUseStatement\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-deviceusestatement.html\">CH Emergency Record Device Use Statement</a></p></div><p><b>status</b>: Active</p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>timing</b>: 2023-01-15</p><p><b>recordedOn</b>: 2023-01-15</p><p><b>device</b>: <a href=\"Device-EX-MedicalDevice.html\">Device: status = active; type = Cardiac pacemaker</a></p><p><b>bodySite</b>: <span title=\"Codes:{http://snomed.info/sct 80891009}\">Heart</span></p></div>"
      },
      "status" : "active",
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "timingDateTime" : "2023-01-15",
      "recordedOn" : "2023-01-15",
      "device" : {
        "reference" : "Device/EX-MedicalDevice"
      },
      "bodySite" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "80891009"
        }]
      }
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Observation/EX-Pregnancy",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "EX-Pregnancy",
      "meta" : {
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-status-uv-ips"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Observation_EX-Pregnancy\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation EX-Pregnancy</b></p><a name=\"EX-Pregnancy\"> </a><a name=\"hcEX-Pregnancy\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://hl7.org/fhir/uv/ips/STU2/StructureDefinition-Observation-pregnancy-status-uv-ips.html\">Observation Pregnancy - Status (IPS)</a></p></div><p><b>status</b>: Final</p><p><b>category</b>: <span title=\"Codes:{http://terminology.hl7.org/CodeSystem/observation-category social-history}\">Social History</span></p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 82810-3}\">Pregnancy status</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>effective</b>: 2025-09-10 10:00:00+0200</p><p><b>performer</b>: <a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></p><p><b>value</b>: true</p></div>"
      },
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "social-history"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "82810-3"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "effectiveDateTime" : "2025-09-10T10:00:00+02:00",
      "performer" : [{
        "reference" : "Practitioner/EX-Practitioner"
      }],
      "valueBoolean" : true
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Observation/EX-CognitiveDisability",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "EX-CognitiveDisability",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-cognitive-disability"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Observation_EX-CognitiveDisability\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation EX-CognitiveDisability</b></p><a name=\"EX-CognitiveDisability\"> </a><a name=\"hcEX-CognitiveDisability\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-observation-cognitive-disability.html\">CH Emergency Record Observation Disability</a></p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 52448006}\">Dementia</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>effective</b>: 2025-10-08</p><p><b>performer</b>: <a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></p></div>"
      },
      "status" : "final",
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "52448006"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "effectiveDateTime" : "2025-10-08",
      "performer" : [{
        "reference" : "Practitioner/EX-Practitioner"
      }]
    }
  },
  {
    "fullUrl" : "http://fhir.ch/ig/emr/Observation/EX-PhysicalDisability",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "EX-PhysicalDisability",
      "meta" : {
        "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-physical-disability"]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Observation_EX-PhysicalDisability\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Observation EX-PhysicalDisability</b></p><a name=\"EX-PhysicalDisability\"> </a><a name=\"hcEX-PhysicalDisability\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-emr-observation-physical-disability.html\">CH Emergency Record Physical Disability Observation</a></p></div><p><b>status</b>: Final</p><p><b>code</b>: <span title=\"Codes:{http://snomed.info/sct 228158008}\">Walking disability</span></p><p><b>subject</b>: <a href=\"Patient-EX-Patient.html\">Anna Schmidt  Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)</a></p><p><b>effective</b>: 2025-10-08</p><p><b>performer</b>: <a href=\"Practitioner-EX-Practitioner.html\">Practitioner Sarah Huber (official)</a></p></div>"
      },
      "status" : "final",
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "228158008"
        }]
      },
      "subject" : {
        "reference" : "Patient/EX-Patient"
      },
      "effectiveDateTime" : "2025-10-08",
      "performer" : [{
        "reference" : "Practitioner/EX-Practitioner"
      }]
    }
  }]
}

```
