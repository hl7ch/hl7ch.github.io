# Gynecological Checkup - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Gynecological Checkup**

## Example Bundle: Gynecological Checkup



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "3-gyn-document",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-with-sr"
    ]
  },
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:26d3dff7-ab05-4737-a49c-5eccd33595f8"
  },
  "type" : "document",
  "timestamp" : "2019-04-01T20:18:41.341+00:00",
  "entry" : [
    {
      "fullUrl" : "http://example.com/fhir/Composition/3-gyn-with-sr",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "3-gyn-with-sr",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr"
          ]
        },
        "text" : {
          "status" : "extensions",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Composition_3-gyn-with-sr\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Composition 3-gyn-with-sr</b></p><a name=\"3-gyn-with-sr\"> </a><a name=\"hc3-gyn-with-sr\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-composition-with-sr.html\">CH LAB-Order Composition with ServiceRequest</a></p></div><p><b>CH ORF Receiver</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#PractitionerRole_EvaErlenmeyerLaborPipette\">PractitionerRole: identifier = urn:oid:2.16.756.5.30.1.123.100.2.1.1#K333333</a></p><p><b>CH ORF Copy Receiver</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#PractitionerRole_MarcMustermannGruppenpraxis\">PractitionerRole</a></p><p><b>status</b>: Final</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 721965002}\">Laboratory order (record artifact)</span></p><p><b>category</b>: <span title=\"Codes:{http://snomed.info/sct 721963009}\">Order (record artifact)</span></p><p><b>date</b>: 2020-03-31 11:46:09+0200</p><p><b>author</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#PractitionerRole_PeterPapGruppenpraxis\">PractitionerRole</a></p><p><b>title</b>: Laboratory Order 3-gyn</p></div>"
        },
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-receiver",
            "valueReference" : {
              "reference" : "PractitionerRole/EvaErlenmeyerLaborPipette"
            }
          },
          {
            "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-copyreceiver",
            "valueReference" : {
              "reference" : "PractitionerRole/MarcMustermannGruppenpraxis"
            }
          }
        ],
        "status" : "final",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "721965002",
              "display" : "Laboratory order (record artifact)"
            }
          ]
        },
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "721963009",
                "display" : "Order (record artifact)"
              }
            ]
          }
        ],
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "date" : "2020-03-31T11:46:09+02:00",
        "author" : [
          {
            "reference" : "PractitionerRole/PeterPapGruppenpraxis"
          }
        ],
        "title" : "Laboratory Order 3-gyn",
        "section" : [
          {
            "title" : "Laboratory Order with Service Request 3-gyn",
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "721963009",
                  "display" : "Order (record artifact)"
                }
              ]
            },
            "entry" : [
              {
                "reference" : "ServiceRequest/3-gyn-service-request-smear-test"
              },
              {
                "reference" : "ServiceRequest/3-gyn-service-request-hpv"
              },
              {
                "reference" : "ServiceRequest/3-gyn-service-request-urine-panel"
              },
              {
                "reference" : "ServiceRequest/3-gyn-service-request-obstetric-panel"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Patient/MarinaRubella",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "MarinaRubella",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Patient_MarinaRubella\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Patient MarinaRubella</b></p><a name=\"MarinaRubella\"> </a><a name=\"hcMarinaRubella\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient.html\">CH Core Patient</a></p></div><p style=\"border: 1px #661aff solid; background-color: #e6e6ff; padding: 10px;\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</p><hr/><table class=\"grid\"><tr><td style=\"background-color: #f3f5da\" title=\"Known Marital status of Patient\">Marital Status:</td><td colspan=\"3\"><span title=\"Codes:{http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus 2}\">verheiratet</span></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Alternate names (see the one above)\">Alt. Name:</td><td colspan=\"3\">Meier (Name changed for Marriage)</td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Ways to contact the Patient\">Contact Detail</td><td colspan=\"3\"><ul><li><a href=\"tel:+41641234567\">+41 64 123 45 67</a></li><li><a href=\"mailto:marina.rubella@example.ch\">marina.rubella@example.ch</a></li><li>Via del bosco 88 Airolo 6780 (home)</li></ul></td></tr><tr><td style=\"background-color: #f3f5da\" title=\"Language spoken\">Language:</td><td colspan=\"3\"><span title=\"Codes:{urn:ietf:bcp:47 it-CH}\">Italienisch (Schweiz)</span> (preferred)</td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The registered place of birth of the patient. A sytem may use the address.text if they don't store the birthPlace address in discrete elements.\"><a href=\"http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-birthPlace.html\">Patient Birth Place</a></td><td colspan=\"3\">Mendrisio Schweiz </td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The place of origin of the patient.\"><a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient-ech-11-placeoforigin.html\">Place of Origin according to eCH-0011</a></td><td colspan=\"3\">Airolo TI </td></tr><tr><td style=\"background-color: #f3f5da\" title=\"The patient's professed religious affiliations.\"><a href=\"http://hl7.org/fhir/extensions/5.3.0-ballot-tc1/StructureDefinition-patient-religion.html\">Patient Religion</a></td><td colspan=\"3\"><span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v3-ReligiousAffiliation 1077}\">Protestant</span></td></tr></table></div>"
        },
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/patient-birthPlace",
            "valueAddress" : {
              "city" : "Mendrisio",
              "country" : "Schweiz"
            }
          },
          {
            "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-ech-11-placeoforigin",
            "valueAddress" : {
              "city" : "Airolo",
              "state" : "TI"
            }
          },
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/patient-religion",
            "valueCodeableConcept" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v3-ReligiousAffiliation",
                  "code" : "1077",
                  "display" : "Protestant"
                }
              ]
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
            "value" : "80756011110123400005"
          }
        ],
        "name" : [
          {
            "use" : "official",
            "family" : "Rubella",
            "_family" : {
              "extension" : [
                {
                  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name",
                  "valueCode" : "officialName"
                }
              ]
            },
            "given" : ["Marina"],
            "_given" : [
              {
                "extension" : [
                  {
                    "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-firstname",
                    "valueCode" : "officialFirstName"
                  }
                ]
              }
            ]
          },
          {
            "use" : "maiden",
            "family" : "Meier",
            "_family" : {
              "extension" : [
                {
                  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-ech-11-name",
                  "valueCode" : "originalName"
                }
              ]
            }
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41 64 123 45 67",
            "use" : "home"
          },
          {
            "system" : "email",
            "value" : "marina.rubella@example.ch"
          }
        ],
        "gender" : "female",
        "birthDate" : "1992-08-08",
        "address" : [
          {
            "use" : "home",
            "type" : "both",
            "line" : ["Via del bosco 88"],
            "city" : "Airolo",
            "postalCode" : "6780"
          }
        ],
        "maritalStatus" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
              "code" : "2",
              "display" : "verheiratet"
            }
          ]
        },
        "communication" : [
          {
            "language" : {
              "coding" : [
                {
                  "system" : "urn:ietf:bcp:47",
                  "code" : "it-CH"
                }
              ],
              "text" : "Italienisch (Schweiz)"
            },
            "preferred" : true
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Practitioner/MarcMustermann",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "MarcMustermann",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_MarcMustermann\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner MarcMustermann</b></p><a name=\"MarcMustermann\"> </a><a name=\"hcMarcMustermann\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html\">CH Core Practitioner</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000050700, <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/L248519</p><p><b>name</b>: Marc Mustermann (Official)</p><p><b>telecom</b>: ph: 033 444 22 11(Work), <a href=\"mailto:marc.mustermann@gruppenpraxis.ch\">marc.mustermann@gruppenpraxis.ch</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000050700"
          },
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "L248519"
          }
        ],
        "name" : [
          {
            "use" : "official",
            "family" : "Mustermann",
            "given" : ["Marc"],
            "prefix" : ["Dr. med."],
            "_prefix" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
                    "valueCode" : "AC"
                  }
                ]
              }
            ]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "033 444 22 11",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "marc.mustermann@gruppenpraxis.ch",
            "use" : "work"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Organization/Gruppenpraxis",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "Gruppenpraxis",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_Gruppenpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization Gruppenpraxis</b></p><a name=\"Gruppenpraxis\"> </a><a name=\"hcGruppenpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization-epr.html\">CH Core Organization EPR</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000241115</p><p><b>name</b>: Gruppenpraxis Olten</p><p><b>telecom</b>: <a href=\"tel:+41555556677\">+41555556677</a>, <a href=\"mailto:info@gruppenpraxis.ch\">info@gruppenpraxis.ch</a>, <a href=\"http://www.gruppenpraxis.ch\">http://www.gruppenpraxis.ch</a></p><p><b>address</b>: Gerbergasse 12 Olten 4600 CH </p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000241115"
          }
        ],
        "name" : "Gruppenpraxis Olten",
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41555556677",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "info@gruppenpraxis.ch",
            "use" : "work"
          },
          {
            "system" : "url",
            "value" : "http://www.gruppenpraxis.ch",
            "use" : "work"
          }
        ],
        "address" : [
          {
            "line" : ["Gerbergasse 12"],
            "city" : "Olten",
            "postalCode" : "4600",
            "country" : "CH"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/PractitionerRole/MarcMustermannGruppenpraxis",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "MarcMustermannGruppenpraxis",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_MarcMustermannGruppenpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole MarcMustermannGruppenpraxis</b></p><a name=\"MarcMustermannGruppenpraxis\"> </a><a name=\"hcMarcMustermannGruppenpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html\">CH Core PractitionerRole</a></p></div><p><b>practitioner</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Practitioner_MarcMustermann\">Practitioner Marc Mustermann (official)</a></p><p><b>organization</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Organization_Gruppenpraxis\">Organization Gruppenpraxis Olten</a></p></div>"
        },
        "practitioner" : {
          "reference" : "Practitioner/MarcMustermann"
        },
        "organization" : {
          "reference" : "Organization/Gruppenpraxis"
        }
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Practitioner/EvaErlenmeyer",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "EvaErlenmeyer",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_EvaErlenmeyer\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner EvaErlenmeyer</b></p><a name=\"EvaErlenmeyer\"> </a><a name=\"hcEvaErlenmeyer\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html\">CH Core Practitioner</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000050717, <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/Y274589</p><p><b>name</b>: Eva Erlenmeyer (Official)</p><p><b>telecom</b>: ph: 033 444 55 66(Work), <a href=\"mailto:eva.erlenmeyer@labor-pipette.ch\">eva.erlenmeyer@labor-pipette.ch</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000050717"
          },
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "name" : [
          {
            "use" : "official",
            "family" : "Erlenmeyer",
            "given" : ["Eva"],
            "prefix" : ["Dr. med."],
            "_prefix" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
                    "valueCode" : "AC"
                  }
                ]
              }
            ]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "033 444 55 66",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "eva.erlenmeyer@labor-pipette.ch",
            "use" : "work"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Organization/LaborPipette",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "LaborPipette",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Organization_LaborPipette\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Organization LaborPipette</b></p><a name=\"LaborPipette\"> </a><a name=\"hcLaborPipette\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html\">CH Core Organization</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601000234407</p><p><b>name</b>: Labor Pipette</p><p><b>telecom</b>: <a href=\"tel:+41223345566\">+41223345566</a>, <a href=\"mailto:info@labor-pipette.ch\">info@labor-pipette.ch</a>, <a href=\"http://www.labor-pipette.ch\">http://www.labor-pipette.ch</a></p><p><b>address</b>: Laborstrasse 23 Olten 4600 CH </p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000234407"
          }
        ],
        "name" : "Labor Pipette",
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41223345566",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "info@labor-pipette.ch",
            "use" : "work"
          },
          {
            "system" : "url",
            "value" : "http://www.labor-pipette.ch",
            "use" : "work"
          }
        ],
        "address" : [
          {
            "line" : ["Laborstrasse 23"],
            "city" : "Olten",
            "postalCode" : "4600",
            "country" : "CH"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/PractitionerRole/EvaErlenmeyerLaborPipette",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "EvaErlenmeyerLaborPipette",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_EvaErlenmeyerLaborPipette\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole EvaErlenmeyerLaborPipette</b></p><a name=\"EvaErlenmeyerLaborPipette\"> </a><a name=\"hcEvaErlenmeyerLaborPipette\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html\">CH Core PractitionerRole</a></p></div><p><b>identifier</b>: <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/K333333</p><p><b>practitioner</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Practitioner_EvaErlenmeyer\">Practitioner Eva Erlenmeyer (official)</a></p><p><b>organization</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Organization_LaborPipette\">Organization Labor Pipette</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "K333333"
          }
        ],
        "practitioner" : {
          "reference" : "Practitioner/EvaErlenmeyer"
        },
        "organization" : {
          "reference" : "Organization/LaborPipette"
        }
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Practitioner/PeterPap",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "PeterPap",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Practitioner_PeterPap\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Practitioner PeterPap</b></p><a name=\"PeterPap\"> </a><a name=\"hcPeterPap\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html\">CH Core Practitioner</a></p></div><p><b>identifier</b>: <a href=\"https://www.gs1.org/standards/id-keys/gln\" title=\"Global Location Number\">GLN</a>/7601003050707, <code>urn:oid:2.16.756.5.30.1.123.100.2.1.1</code>/A000001</p><p><b>name</b>: Peter Pap (Official)</p><p><b>telecom</b>: ph: 032 333 22 40(Work), <a href=\"mailto:peter.pap@gruppenpraxis.ch\">peter.pap@gruppenpraxis.ch</a></p></div>"
        },
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601003050707"
          },
          {
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "A000001"
          }
        ],
        "name" : [
          {
            "use" : "official",
            "family" : "Pap",
            "given" : ["Peter"],
            "prefix" : ["Dr. med."],
            "_prefix" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
                    "valueCode" : "AC"
                  }
                ]
              }
            ]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "032 333 22 40",
            "use" : "work"
          },
          {
            "system" : "email",
            "value" : "peter.pap@gruppenpraxis.ch",
            "use" : "work"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/PractitionerRole/PeterPapGruppenpraxis",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "PeterPapGruppenpraxis",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"PractitionerRole_PeterPapGruppenpraxis\"> </a><p class=\"res-header-id\"><b>Generated Narrative: PractitionerRole PeterPapGruppenpraxis</b></p><a name=\"PeterPapGruppenpraxis\"> </a><a name=\"hcPeterPapGruppenpraxis\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitionerrole.html\">CH Core PractitionerRole</a></p></div><p><b>practitioner</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Practitioner_PeterPap\">Practitioner Peter Pap (official)</a></p><p><b>organization</b>: <a href=\"Bundle-0-best-practice-document-with-sr.html#Organization_Gruppenpraxis\">Organization Gruppenpraxis Olten</a></p></div>"
        },
        "practitioner" : {
          "reference" : "Practitioner/PeterPap"
        },
        "organization" : {
          "reference" : "Organization/Gruppenpraxis"
        }
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Specimen/Cervix-swab",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "Cervix-swab",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Specimen_Cervix-swab\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Specimen Cervix-swab</b></p><a name=\"Cervix-swab\"> </a><a name=\"hcCervix-swab\"> </a><p><b>identifier</b>: 48736-12345-12345</p><p><b>accessionIdentifier</b>: 4e88a-12345-aa222</p><p><b>status</b>: Available</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 430387006}\">Combined specimen of cytologic material from endocervix, ectocervix, and vaginal fornix (specimen)</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>request</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#ServiceRequest_3-gyn-service-request-smear-test\">ServiceRequest Pap smear tests - FPAR 2.0 set</a></p><h3>Collections</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Collector</b></td><td><b>Collected[x]</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Practitioner_PeterPap\">Practitioner Peter Pap (official)</a></td><td>2015-08-16 06:40:17+0000</td></tr></table><h3>Containers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Type</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 706053007}\">General specimen container (physical object)</span></td></tr></table></div>"
        },
        "identifier" : [
          {
            "value" : "48736-12345-12345"
          }
        ],
        "accessionIdentifier" : {
          "value" : "4e88a-12345-aa222"
        },
        "status" : "available",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "430387006",
              "display" : "Combined specimen of cytologic material from endocervix, ectocervix, and vaginal fornix (specimen)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "request" : [
          {
            "reference" : "ServiceRequest/3-gyn-service-request-smear-test"
          }
        ],
        "collection" : {
          "collector" : {
            "reference" : "Practitioner/PeterPap"
          },
          "collectedDateTime" : "2015-08-16T06:40:17Z"
        },
        "container" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "706053007",
                  "display" : "General specimen container (physical object)"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Specimen/Blood-gyn",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "Blood-gyn",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Specimen_Blood-gyn\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Specimen Blood-gyn</b></p><a name=\"Blood-gyn\"> </a><a name=\"hcBlood-gyn\"> </a><p><b>status</b>: Available</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 119297000}\">Blood sample</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>request</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#ServiceRequest_3-gyn-service-request-obstetric-panel\">ServiceRequest Obstetric 1996 Pnl Ser+Bld</a></p><h3>Collections</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Collector</b></td><td><b>Collected[x]</b></td><td><b>BodySite</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Practitioner_PeterPap\">Practitioner Peter Pap (official)</a></td><td>2015-08-16 06:40:17+0000</td><td><span title=\"Codes:{http://snomed.info/sct 721029009}\">Structure of superficial vein of left upper limb (body structure)</span></td></tr></table><h3>Containers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Type</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 706053007}\">General specimen container (physical object)</span></td></tr></table><p><b>note</b>: </p><blockquote><div><p>Specimen is grossly lipemic</p>\n</div></blockquote></div>"
        },
        "status" : "available",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "119297000",
              "display" : "Blood sample"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "request" : [
          {
            "reference" : "ServiceRequest/3-gyn-service-request-obstetric-panel"
          }
        ],
        "collection" : {
          "collector" : {
            "reference" : "Practitioner/PeterPap"
          },
          "collectedDateTime" : "2015-08-16T06:40:17Z",
          "bodySite" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "721029009",
                "display" : "Structure of superficial vein of left upper limb (body structure)"
              }
            ]
          }
        },
        "container" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "706053007",
                  "display" : "General specimen container (physical object)"
                }
              ]
            }
          }
        ],
        "note" : [
          {
            "text" : "Specimen is grossly lipemic"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Specimen/Serum-gyn",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "Serum-gyn",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Specimen_Serum-gyn\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Specimen Serum-gyn</b></p><a name=\"Serum-gyn\"> </a><a name=\"hcSerum-gyn\"> </a><p><b>identifier</b>: 48736-12345-75465</p><p><b>accessionIdentifier</b>: 4e88a-12345-dd888</p><p><b>status</b>: Available</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 119364003}\">Serum specimen (specimen)</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>request</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#ServiceRequest_3-gyn-service-request-obstetric-panel\">ServiceRequest Obstetric 1996 Pnl Ser+Bld</a></p><h3>Collections</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Collector</b></td><td><b>Collected[x]</b></td><td><b>BodySite</b></td><td><b>FastingStatus[x]</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Practitioner_PeterPap\">Practitioner Peter Pap (official)</a></td><td>2015-08-16 06:40:17+0000</td><td><span title=\"Codes:{http://snomed.info/sct 49852007}\">Structure of median cubital vein (body structure)</span></td><td><span title=\"Codes:{http://terminology.hl7.org/CodeSystem/v2-0916 F}\">Patient was fasting prior to the procedure.</span></td></tr></table><h3>Containers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Type</b></td></tr><tr><td style=\"display: none\">*</td><td><span title=\"Codes:{http://snomed.info/sct 706053007}\">General specimen container (physical object)</span></td></tr></table></div>"
        },
        "identifier" : [
          {
            "value" : "48736-12345-75465"
          }
        ],
        "accessionIdentifier" : {
          "value" : "4e88a-12345-dd888"
        },
        "status" : "available",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "119364003",
              "display" : "Serum specimen (specimen)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "request" : [
          {
            "reference" : "ServiceRequest/3-gyn-service-request-obstetric-panel"
          }
        ],
        "collection" : {
          "collector" : {
            "reference" : "Practitioner/PeterPap"
          },
          "collectedDateTime" : "2015-08-16T06:40:17Z",
          "bodySite" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "49852007",
                "display" : "Structure of median cubital vein (body structure)"
              }
            ]
          },
          "fastingStatusCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0916",
                "code" : "F",
                "display" : "Patient was fasting prior to the procedure."
              }
            ]
          }
        },
        "container" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "706053007",
                  "display" : "General specimen container (physical object)"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/Specimen/Urine-gyn",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "Urine-gyn",
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"Specimen_Urine-gyn\"> </a><p class=\"res-header-id\"><b>Generated Narrative: Specimen Urine-gyn</b></p><a name=\"Urine-gyn\"> </a><a name=\"hcUrine-gyn\"> </a><p><b>identifier</b>: 11111-15394-75465</p><p><b>accessionIdentifier</b>: 22222-bc987-dd888</p><p><b>status</b>: Available</p><p><b>type</b>: <span title=\"Codes:{http://snomed.info/sct 122575003}\">Urine sample</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>receivedTime</b>: 2023-12-01 16:40:17+0000</p><p><b>request</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#ServiceRequest_3-gyn-service-request-urine-panel\">ServiceRequest Urinalysis dipstick panel - Urine by Automated test strip</a></p><h3>Collections</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Collector</b></td><td><b>Collected[x]</b></td></tr><tr><td style=\"display: none\">*</td><td><a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Practitioner_PeterPap\">Practitioner Peter Pap (official)</a></td><td>2023-12-01 06:40:17+0000</td></tr></table><h3>Containers</h3><table class=\"grid\"><tr><td style=\"display: none\">-</td><td><b>Identifier</b></td><td><b>Description</b></td><td><b>Type</b></td></tr><tr><td style=\"display: none\">*</td><td>4e88a-bc987-dd888-12345-urin</td><td>Uriswab™ : Urine Collection System</td><td><span title=\"Codes:{http://snomed.info/sct 706054001}\">Urine specimen container (physical object)</span></td></tr></table></div>"
        },
        "identifier" : [
          {
            "value" : "11111-15394-75465"
          }
        ],
        "accessionIdentifier" : {
          "value" : "22222-bc987-dd888"
        },
        "status" : "available",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "122575003",
              "display" : "Urine sample"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "receivedTime" : "2023-12-01T16:40:17Z",
        "request" : [
          {
            "reference" : "ServiceRequest/3-gyn-service-request-urine-panel"
          }
        ],
        "collection" : {
          "collector" : {
            "reference" : "Practitioner/PeterPap"
          },
          "collectedDateTime" : "2023-12-01T06:40:17Z"
        },
        "container" : [
          {
            "identifier" : [
              {
                "value" : "4e88a-bc987-dd888-12345-urin"
              }
            ],
            "description" : "Uriswab™ : Urine Collection System",
            "type" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "706054001",
                  "display" : "Urine specimen container (physical object)"
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/3-gyn-service-request-smear-test",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "3-gyn-service-request-smear-test",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_3-gyn-service-request-smear-test\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 3-gyn-service-request-smear-test</b></p><a name=\"3-gyn-service-request-smear-test\"> </a><a name=\"hc3-gyn-service-request-smear-test\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>status</b>: Active</p><p><b>intent</b>: Original Order</p><p><b>priority</b>: Routine</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 86662-4}\">Pap smear tests - FPAR 2.0 set</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>requester</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#PractitionerRole_PeterPapGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 702601001}\">Routine gynecologic examination (procedure)</span></p><p><b>specimen</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Specimen_Cervix-swab\">Specimen: identifier = 48736-12345-12345; accessionIdentifier = 4e88a-12345-aa222; status = available; type = Combined specimen of cytologic material from endocervix, ectocervix, and vaginal fornix (specimen)</a></p></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "status" : "active",
        "intent" : "original-order",
        "priority" : "routine",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "86662-4",
              "display" : "Pap smear tests - FPAR 2.0 set"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPapGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "702601001"
              }
            ],
            "text" : "Routine gynecologic examination (procedure)"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/Cervix-swab"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/3-gyn-service-request-hpv",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "3-gyn-service-request-hpv",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_3-gyn-service-request-hpv\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 3-gyn-service-request-hpv</b></p><a name=\"3-gyn-service-request-hpv\"> </a><a name=\"hc3-gyn-service-request-hpv\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>status</b>: Active</p><p><b>intent</b>: Original Order</p><p><b>priority</b>: Routine</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 14503-7}\">Human papilloma virus 16+18 Ag [Presence] in Cervix</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>requester</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#PractitionerRole_PeterPapGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 702601001}\">Routine gynecologic examination (procedure)</span></p><p><b>specimen</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Specimen_Cervix-swab\">Specimen: identifier = 48736-12345-12345; accessionIdentifier = 4e88a-12345-aa222; status = available; type = Combined specimen of cytologic material from endocervix, ectocervix, and vaginal fornix (specimen)</a></p></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "status" : "active",
        "intent" : "original-order",
        "priority" : "routine",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "14503-7",
              "display" : "Human papilloma virus 16+18 Ag [Presence] in Cervix"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPapGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "702601001"
              }
            ],
            "text" : "Routine gynecologic examination (procedure)"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/Cervix-swab"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/3-gyn-service-request-urine-panel",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "3-gyn-service-request-urine-panel",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_3-gyn-service-request-urine-panel\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 3-gyn-service-request-urine-panel</b></p><a name=\"3-gyn-service-request-urine-panel\"> </a><a name=\"hc3-gyn-service-request-urine-panel\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>status</b>: Active</p><p><b>intent</b>: Original Order</p><p><b>priority</b>: Routine</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 50556-0}\">Urinalysis dipstick panel - Urine by Automated test strip</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>requester</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#PractitionerRole_PeterPapGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 702601001}\">Routine gynecologic examination (procedure)</span></p><p><b>specimen</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Specimen_Urine-gyn\">Specimen: identifier = 11111-15394-75465; accessionIdentifier = 22222-bc987-dd888; status = available; type = Urine sample; receivedTime = 2023-12-01 16:40:17+0000</a></p></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "status" : "active",
        "intent" : "original-order",
        "priority" : "routine",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "50556-0",
              "display" : "Urinalysis dipstick panel - Urine by Automated test strip"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPapGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "702601001"
              }
            ],
            "text" : "Routine gynecologic examination (procedure)"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/Urine-gyn"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://example.com/fhir/ServiceRequest/3-gyn-service-request-obstetric-panel",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "3-gyn-service-request-obstetric-panel",
        "meta" : {
          "profile" : [
            "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
          ]
        },
        "text" : {
          "status" : "generated",
          "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><a name=\"ServiceRequest_3-gyn-service-request-obstetric-panel\"> </a><p class=\"res-header-id\"><b>Generated Narrative: ServiceRequest 3-gyn-service-request-obstetric-panel</b></p><a name=\"3-gyn-service-request-obstetric-panel\"> </a><a name=\"hc3-gyn-service-request-obstetric-panel\"> </a><div style=\"display: inline-block; background-color: #d9e0e7; padding: 6px; margin: 4px; border: 1px solid #8da1b4; border-radius: 5px; line-height: 60%\"><p style=\"margin-bottom: 0px\"/><p style=\"margin-bottom: 0px\">Profile: <a href=\"StructureDefinition-ch-lab-order-SR.html\">CH LAB-Order ServiceRequest</a></p></div><p><b>identifier</b>: Placer Identifier/Y274589</p><p><b>status</b>: Active</p><p><b>intent</b>: Original Order</p><p><b>priority</b>: Routine</p><p><b>code</b>: <span title=\"Codes:{http://loinc.org 24364-2}\">Obstetric 1996 Pnl Ser+Bld</span></p><p><b>subject</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Patient_MarinaRubella\">Marina Rubella (official) Female, DoB: 1992-08-08 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756011110123400005)</a></p><p><b>requester</b>: <a href=\"Bundle-3-gyn-document-with-sr-and-form.html#PractitionerRole_PeterPapGruppenpraxis\">PractitionerRole</a></p><p><b>reasonCode</b>: <span title=\"Codes:{http://snomed.info/sct 702601001}\">Routine gynecologic examination (procedure)</span></p><p><b>specimen</b>: </p><ul><li><a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Specimen_Blood-gyn\">Specimen: status = available; type = Blood sample; note = Specimen is grossly lipemic</a></li><li><a href=\"Bundle-3-gyn-document-with-sr-and-form.html#Specimen_Serum-gyn\">Specimen: identifier = 48736-12345-75465; accessionIdentifier = 4e88a-12345-dd888; status = available; type = Serum specimen (specimen)</a></li></ul></div>"
        },
        "identifier" : [
          {
            "type" : {
              "coding" : [
                {
                  "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                  "code" : "PLAC",
                  "display" : "Placer Identifier"
                }
              ]
            },
            "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
            "value" : "Y274589"
          }
        ],
        "status" : "active",
        "intent" : "original-order",
        "priority" : "routine",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "24364-2",
              "display" : "Obstetric 1996 Pnl Ser+Bld"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/MarinaRubella"
        },
        "requester" : {
          "reference" : "PractitionerRole/PeterPapGruppenpraxis"
        },
        "reasonCode" : [
          {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "702601001"
              }
            ],
            "text" : "Routine gynecologic examination (procedure)"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/Blood-gyn"
          },
          {
            "reference" : "Specimen/Serum-gyn"
          }
        ]
      }
    }
  ]
}

```
