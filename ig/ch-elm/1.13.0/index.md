# Home - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ImplementationGuide/ch.fhir.ig.ch-elm | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:CH_ELM |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

CH ELM is a project of the Swiss Federal Office of Public Health (FOPH), Communicable Diseases Division, to enable laboratories to send their observations of notifiable communicable infectious diseases to the FOPH electronically. A report is created as a specialized Clinical Document based on the HL7® FHIR® standard. This [FHIR document](document.md) is sent to the FOPH by a [FHIR RESTful web API endpoint](api.md). CH ELM derives from the [Swiss implementation guides](https://fhir.ch/) and the [European laboratory project](https://hl7.eu/fhir/laboratory/) (see [graphical overview](#dependency-overview)).

The expected content of the FHIR document, based on the ordinance of the Federal Office of Public Health ([DE](https://www.fedlex.admin.ch/eli/cc/2015/892/de), [FR](https://www.fedlex.admin.ch/eli/cc/2015/892/fr), [IT](https://www.fedlex.admin.ch/eli/cc/2015/892/it)), is defined in the [logical model](StructureDefinition-LaboratoryReport.md). A [mapping](StructureDefinition-LaboratoryReport-mappings.md#mappings-for-ch-elm-laboratory-report-to-fhir-hl7-org-fhir-r4) shows how to access the data from the FHIR document. In addition, further documentation for specific topics can be found on the [guidance](guidance.md) page and the [use cases](usecase.md) describe the different scenarios with respective examples for specific organisms.

The specification herewith documented is work in progress. No liability can be inferred from the use or misuse of this specification, or its consequences.

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in [npm format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Implementation Support for Laboratories

This guide supports you as a laboratory in the following way:

* [Use cases](usecase.md) describe the different scenarios with respective example reports for specific organisms, e.g. for Neisseria gonorrhoeae in [xml](Bundle-1Doc-NeisseriaGonorrhoeae.xml.md) or [json](Bundle-1Doc-NeisseriaGonorrhoeae.json.md), you choose if you want to provide the FHIR laboratory report in xml or json format.
* What needs to be defined in the laboratory report is defined in [FHIR document](document.md), profiles define the constraints on FHIR resources which need to be included in the report, see the overview [here](profiles.md).
* The data elements defined by the ordinance of the Federal Office of Public Health (FOPH) for the report are defined in the [logical model](StructureDefinition-LaboratoryReport.md) and are then [mapped](StructureDefinition-LaboratoryReport-mappings.md#mappings-for-ch-elm-laboratory-report-to-fhir-hl7-org-fhir-r4) to the FHIR document structure.
* Value sets for the [terminology](terminology.md) are provided as FHIR resources which you can directly import from the [npm package](package.tgz).
* The [laboratory report](document.md) is sent to the FOPH by a [FHIR RESTful web API endpoint](api.md).
* Further documentation for specific topics can be found on [guidance](guidance.md) and/or by contacting the FOPH directly.

[FHIR R4](https://hl7.org/fhir/R4/index.html) has a huge implementation community and offers various libraries to support the implementation of FHIR based solutions, for creating the FHIR document or providing a client for doing the FHIR API calls. For java we recommend [hapi-fhir](https://hapifhir.io/), for .NET [firely-net-sdk](https://github.com/FirelyTeam/firely-net-sdk), but there are also multiple other [options](https://confluence.hl7.org/display/FHIR/Open+Source+Implementations). If you have questions about general FHIR questions do not hesitate to ask in [chat.fhir.org](https://chat.fhir.org/).

To check if your report is valid to the requirements of this implementation guide you can check it with the [FHIR Validator](https://confluence.hl7.org/display/FHIR/Using+the+FHIR+Validator) providing this [package](package.tgz) as a parameter and specifying the profile `http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict`.

Since the FHIR API is standardized you can test your client also against a public FHIR test server like [hapi](https://hapi.fhir.org/baseR4/swagger-ui/).

If you have general feedback this implementation guide you find at the bottom a "Propose a change" link where you can raise an issue.

### Must Support

For the CH ELM exchange format, the [mustSupport](https://www.hl7.org/fhir/profiling.html#mustsupport) flag set to `true` has the following meaning: 
 If the sending application has data for the element, it is required to populate the element with a non-empty value. If the value is not known, the element may be omitted.

### IP Statements

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This publication includes IP covered under the following statements.

* CC0-1.0

* [eCH-011 Types](http://fhir.ch/ig/ch-term/3.2.0/CodeSystem-ech-11.html): [ChElmPatient](StructureDefinition-ch-elm-patient.md), [ChElmPatientHIV](StructureDefinition-ChElmPatientHIV.md), [ChElmPatientInitials](StructureDefinition-ChElmPatientInitials.md) and [ChElmPatientVCT](StructureDefinition-ChElmPatientVCT.md)
* [CH ELM FOPH Patient Name Representation](CodeSystem-ch-elm-foph-patient-name-representation.md): [ChElmFophPatientNameRepresentation](ValueSet-ch-elm-foph-patient-name-representation.md)
* [CH ELM Interpretation Codes Vs](CodeSystem-ch-elm-interpretation-codes-vs.md): [ChElmInterpretationCodesVs](ValueSet-ch-elm-interpretation-codes-vs.md)
* [CH ELM Observation Profile Vs](CodeSystem-ch-elm-observation-profile-vs.md): [ChElmObservationProfileVs](ValueSet-ch-elm-observation-profile-vs.md)
* [CH ELM Results Completion Vs](CodeSystem-ch-elm-results-completion-vs.md): [ChElmResultsCompletionVs](ValueSet-ch-elm-results-completion-vs.md)
* [CH ELM Results Component Vs](CodeSystem-ch-elm-results-component-vs.md): [ChElmResultsComponentVs](ValueSet-ch-elm-results-component-vs.md)
* [CH ELM FOPH Code Reserve](CodeSystem-ch-elm-foph-code-reserve.md): [Bundle/67Doc-Emerging-Pathogen](Bundle-67Doc-Emerging-Pathogen.md), [ChElmObservationResultsLaboratory](StructureDefinition-ch-elm-observation-results-laboratory.md)...Show 5 more,[ChElmObservationResultsLaboratoryMicrobiology](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md),[ChElmObservationResultsLaboratoryMicrobiologyStrict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md),[ChElmResultsLaboratoryObservation](ValueSet-ch-elm-results-laboratory-observation.md),[ChElmResultsLaboratoryObservationComplete](ValueSet-ch-elm-results-laboratory-observation-complete.md)and[ChElmServiceRequestLaboratoryOrder](StructureDefinition-ch-elm-servicerequest-laboratory-order.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [BfsCountryCodes](ValueSet-bfs-country-codes.md), [Bundle/10Doc-Legionella](Bundle-10Doc-Legionella.md)...Show 217 more,[Bundle/11Doc-Malaria](Bundle-11Doc-Malaria.md),[Bundle/12Doc-Mpox](Bundle-12Doc-Mpox.md),[Bundle/13Doc-Shigella](Bundle-13Doc-Shigella.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest](Bundle-14Doc-Neisseriameningitidis-confirmationtest.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest-originalorder](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md),[Bundle/15Doc-Measles-Seroconversion](Bundle-15Doc-Measles-Seroconversion.md),[Bundle/16Doc-Dengue-Titer](Bundle-16Doc-Dengue-Titer.md),[Bundle/17Doc-Neisseria](Bundle-17Doc-Neisseria.md),[Bundle/18Doc-C-diphtheriae](Bundle-18Doc-C-diphtheriae.md),[Bundle/19Doc-S-pneumoniae](Bundle-19Doc-S-pneumoniae.md),[Bundle/1Doc-NeisseriaGonorrhoeae](Bundle-1Doc-NeisseriaGonorrhoeae.md),[Bundle/1bDoc-NeisseriaGonorrhoeae](Bundle-1bDoc-NeisseriaGonorrhoeae.md),[Bundle/1cDoc-NeisseriaGonorrhoeae](Bundle-1cDoc-NeisseriaGonorrhoeae.md),[Bundle/20Doc-Vibrio-cholerae](Bundle-20Doc-Vibrio-cholerae.md),[Bundle/21Doc-HepatiteE](Bundle-21Doc-HepatiteE.md),[Bundle/22Doc-H-influenzae](Bundle-22Doc-H-influenzae.md),[Bundle/23Doc-F-tularensis](Bundle-23Doc-F-tularensis.md),[Bundle/24Doc-Chikungunya](Bundle-24Doc-Chikungunya.md),[Bundle/25Doc-Tick-borne-encephalitis](Bundle-25Doc-Tick-borne-encephalitis.md),[Bundle/26Doc-HepatiteA](Bundle-26Doc-HepatiteA.md),[Bundle/28Doc-Listeria-monocytogenes](Bundle-28Doc-Listeria-monocytogenes.md),[Bundle/29Doc-Rubella](Bundle-29Doc-Rubella.md),[Bundle/2Doc-ChlamydiaTrachomatis](Bundle-2Doc-ChlamydiaTrachomatis.md),[Bundle/2Doc-ChlamydiaTrachomatis-Vct](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md),[Bundle/30Doc-Salmonella-enteritidis](Bundle-30Doc-Salmonella-enteritidis.md),[Bundle/32Doc-Rubella-avidity](Bundle-32Doc-Rubella-avidity.md),[Bundle/33Doc-Salmonella-valueString](Bundle-33Doc-Salmonella-valueString.md),[Bundle/34Doc-Brucella](Bundle-34Doc-Brucella.md),[Bundle/35Doc-CJD](Bundle-35Doc-CJD.md),[Bundle/36Doc-Salmonella-paratyphi](Bundle-36Doc-Salmonella-paratyphi.md),[Bundle/37Doc-Zika](Bundle-37Doc-Zika.md),[Bundle/38Doc-Anthrax](Bundle-38Doc-Anthrax.md),[Bundle/39Doc-Botulims](Bundle-39Doc-Botulims.md),[Bundle/3Doc-CPE](Bundle-3Doc-CPE.md),[Bundle/40Doc-Crimean-Congo](Bundle-40Doc-Crimean-Congo.md),[Bundle/41Doc-Ebola](Bundle-41Doc-Ebola.md),[Bundle/42Doc-Lassa](Bundle-42Doc-Lassa.md),[Bundle/43Doc-Marburg](Bundle-43Doc-Marburg.md),[Bundle/44Doc-Mers-CoV](Bundle-44Doc-Mers-CoV.md),[Bundle/45Doc-Sars-CoV](Bundle-45Doc-Sars-CoV.md),[Bundle/46Doc-Yersinia-pestis](Bundle-46Doc-Yersinia-pestis.md),[Bundle/47Doc-Variola](Bundle-47Doc-Variola.md),[Bundle/48Doc-Mpox-Clade](Bundle-48Doc-Mpox-Clade.md),[Bundle/49Doc-HIV](Bundle-49Doc-HIV.md),[Bundle/4Doc-Campylobacter](Bundle-4Doc-Campylobacter.md),[Bundle/50Doc-HIV-viremia](Bundle-50Doc-HIV-viremia.md),[Bundle/51Doc-Gelbfieber](Bundle-51Doc-Gelbfieber.md),[Bundle/52Doc-Hantavirus](Bundle-52Doc-Hantavirus.md),[Bundle/53Doc-InfluenzaHxNy](Bundle-53Doc-InfluenzaHxNy.md),[Bundle/54Doc-Poliomyelitis](Bundle-54Doc-Poliomyelitis.md),[Bundle/55Doc-Tollwut](Bundle-55Doc-Tollwut.md),[Bundle/56Doc-Trichinella-spiralis](Bundle-56Doc-Trichinella-spiralis.md),[Bundle/57Doc-West-Nile](Bundle-57Doc-West-Nile.md),[Bundle/58Doc-Coxiella](Bundle-58Doc-Coxiella.md),[Bundle/59Doc-EHEC](Bundle-59Doc-EHEC.md),[Bundle/5Doc-TreponemaPallidum](Bundle-5Doc-TreponemaPallidum.md),[Bundle/61Doc-Tb-Susceptibility](Bundle-61Doc-Tb-Susceptibility.md),[Bundle/63Doc-Tb-Genotyping](Bundle-63Doc-Tb-Genotyping.md),[Bundle/65Doc-Tuberculosis](Bundle-65Doc-Tuberculosis.md),[Bundle/66Doc-HivRecency](Bundle-66Doc-HivRecency.md),[Bundle/67Doc-Emerging-Pathogen](Bundle-67Doc-Emerging-Pathogen.md),[Bundle/6Doc-Influenza](Bundle-6Doc-Influenza.md),[Bundle/7Doc-SARSCoV2](Bundle-7Doc-SARSCoV2.md),[Bundle/8Doc-HepatiteB](Bundle-8Doc-HepatiteB.md),[Bundle/9Doc-HepatiteC](Bundle-9Doc-HepatiteC.md),[CHElmHumanName](StructureDefinition-ch-elm-humanname.md),[CH_ELM](index.md),[CH_ELM_CapabilityStatement_DocumentRecipient](CapabilityStatement-ch-elm-documentrecipient.md),[ChElmCodeableConcept](StructureDefinition-ch-elm-codeableconcept.md),[ChElmCoding](StructureDefinition-ch-elm-coding.md),[ChElmComposition](StructureDefinition-ch-elm-composition.md),[ChElmCompositionStrict](StructureDefinition-ch-elm-composition-strict.md),[ChElmDiagnosticReport](StructureDefinition-ch-elm-diagnosticreport.md),[ChElmDocument](StructureDefinition-ch-elm-document.md),[ChElmDocumentStrict](StructureDefinition-ch-elm-document-strict.md),[ChElmExpectingOrganismSpecification](ValueSet-ch-elm-expecting-organism-specification.md),[ChElmExpectingOrganismSpecificationToResultsCompletionVs](ConceptMap-ch-elm-expecting-organism-specification-to-results-completion-vs.md),[ChElmExpectingSpecimenSpecification](ValueSet-ch-elm-expecting-specimen-specification.md),[ChElmExpectingSpecimenSpecificationToResultsCompletionVs](ConceptMap-ch-elm-expecting-specimen-specification-to-results-completion-vs.md),[ChElmExtDepartment](StructureDefinition-ch-elm-ext-department.md),[ChElmExtHivCode](StructureDefinition-ch-elm-ext-hiv-code.md),[ChElmExtVctCode](StructureDefinition-ch-elm-ext-vct-code.md),[ChElmFophBusinessRules](CodeSystem-ch-elm-foph-business-rules.md),[ChElmFophCodeReserve](CodeSystem-ch-elm-foph-code-reserve.md),[ChElmFophPatientNameRepresentation](ValueSet-ch-elm-foph-patient-name-representation.md),[ChElmInterpretationCodesAvidity](ValueSet-ch-elm-interpretation-codes-avidity.md),[ChElmInterpretationCodesPos](ValueSet-ch-elm-interpretation-codes-pos.md),[ChElmInterpretationCodesPosNeg](ValueSet-ch-elm-interpretation-codes-pos-neg.md),[ChElmInterpretationCodesResSus](ValueSet-ch-elm-interpretation-codes-res.md),[ChElmInterpretationCodesSero](ValueSet-ch-elm-interpretation-codes-sero.md),[ChElmInterpretationCodesTiter](ValueSet-ch-elm-interpretation-codes-titer.md),[ChElmInterpretationCodesVs](ValueSet-ch-elm-interpretation-codes-vs.md),[ChElmLabStudyTypes](ValueSet-ch-elm-lab-study-types.md),[ChElmLaboratoryReport](StructureDefinition-LaboratoryReport.md),[ChElmObservationComponentConcentration](StructureDefinition-ch-elm-observation-component-conc.md),[ChElmObservationProfileVs](ValueSet-ch-elm-observation-profile-vs.md),[ChElmObservationResultsLaboratory](StructureDefinition-ch-elm-observation-results-laboratory.md),[ChElmObservationResultsLaboratoryGenotyping](StructureDefinition-ch-elm-observation-results-laboratory-genotyping.md),[ChElmObservationResultsLaboratoryGenotypingStrict](StructureDefinition-ch-elm-observation-results-laboratory-genotyping-strict.md),[ChElmObservationResultsLaboratoryHivRecencyStrict](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md),[ChElmObservationResultsLaboratoryMicrobiology](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md),[ChElmObservationResultsLaboratoryMicrobiologyStrict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md),[ChElmObservationResultsLaboratorySusceptibility](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.md),[ChElmObservationResultsLaboratorySusceptibilityStrict](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility-strict.md),[ChElmObservationRto](StructureDefinition-ch-elm-observation-rto.md),[ChElmObservationTxt](StructureDefinition-ch-elm-observation-txt.md),[ChElmObservationVirl](StructureDefinition-ch-elm-observation-pq-virl.md),[ChElmOrganizationAuthor](StructureDefinition-ch-elm-organization-author.md),[ChElmOrganizationLab](StructureDefinition-ch-elm-organization-lab.md),[ChElmOrganizationOrderer](StructureDefinition-ch-elm-organization-orderer.md),[ChElmPatient](StructureDefinition-ch-elm-patient.md),[ChElmPatientHIV](StructureDefinition-ChElmPatientHIV.md),[ChElmPatientInitials](StructureDefinition-ChElmPatientInitials.md),[ChElmPatientVCT](StructureDefinition-ChElmPatientVCT.md),[ChElmPractitionerOrderer](StructureDefinition-ch-elm-practitioner-orderer.md),[ChElmPractitionerRoleOrderer](StructureDefinition-ch-elm-practitionerrole-orderer.md),[ChElmQuantityArbU](StructureDefinition-ch-elm-quantity-arbu.md),[ChElmResultsBotOrg](ValueSet-ch-elm-results-bot-org.md),[ChElmResultsBotSpec](ValueSet-ch-elm-results-bot-spec.md),[ChElmResultsBruOrg](ValueSet-ch-elm-results-bru-org.md),[ChElmResultsCampDiarOrg](ValueSet-ch-elm-results-camp-diar-org.md),[ChElmResultsCampOrg](ValueSet-ch-elm-results-camp-org.md),[ChElmResultsCholOrg](ValueSet-ch-elm-results-chol-org.md),[ChElmResultsCjdOrg](ValueSet-ch-elm-results-cjd-org.md),[ChElmResultsCodedValuesLaboratory](ValueSet-ch-elm-results-coded-values-laboratory.md),[ChElmResultsCompleteSpec](ValueSet-ch-elm-results-complete-spec.md),[ChElmResultsCompletionVs](ValueSet-ch-elm-results-completion-vs.md),[ChElmResultsComponentAntibioticCpe](ValueSet-ch-elm-results-component-antibiotic-cpe.md),[ChElmResultsComponentAntibioticTb](ValueSet-ch-elm-results-component-antibiotic-tb.md),[ChElmResultsComponentGeneCpe](ValueSet-ch-elm-results-component-gene-cpe.md),[ChElmResultsComponentGeneTb](ValueSet-ch-elm-results-component-gene-tb.md),[ChElmResultsComponentHivRecency](ValueSet-ch-elm-results-component-hiv-recency.md),[ChElmResultsComponentVs](ValueSet-ch-elm-results-component-vs.md),[ChElmResultsDiphOrg](ValueSet-ch-elm-results-diph-org.md),[ChElmResultsDiphSpec](ValueSet-ch-elm-results-diph-spec.md),[ChElmResultsEbolOrg](ValueSet-ch-elm-results-ebol-org.md),[ChElmResultsEhecOrg](ValueSet-ch-elm-results-ehec-org.md),[ChElmResultsEhecToxOrg](ValueSet-ch-elm-results-ehec-tox-org.md),[ChElmResultsGeniSpec](ValueSet-ch-elm-results-geni-spec.md),[ChElmResultsGenoToComponentCode](ConceptMap-ch-elm-results-geno-to-component-code.md),[ChElmResultsGenoToComponentInterpretationCode](ConceptMap-ch-elm-results-geno-to-component-interpretation-code.md),[ChElmResultsHaemOrg](ValueSet-ch-elm-results-haem-org.md),[ChElmResultsHantaOrg](ValueSet-ch-elm-results-hanta-org.md),[ChElmResultsHivOrg](ValueSet-ch-elm-results-hiv-org.md),[ChElmResultsInfOrg](ValueSet-ch-elm-results-inf-org.md),[ChElmResultsInfluenzaHxnyOrg](ValueSet-ch-elm-results-influenza-hxny-org.md),[ChElmResultsLaboratoryObservation](ValueSet-ch-elm-results-laboratory-observation.md),[ChElmResultsLaboratoryObservationComplete](ValueSet-ch-elm-results-laboratory-observation-complete.md),[ChElmResultsLaboratoryObservationGeno](ValueSet-ch-elm-results-laboratory-observation-geno.md),[ChElmResultsLaboratoryObservationSusc](ValueSet-ch-elm-results-laboratory-observation-susc.md),[ChElmResultsLegOrg](ValueSet-ch-elm-results-leg-org.md),[ChElmResultsLisOrg](ValueSet-ch-elm-results-lis-org.md),[ChElmResultsLisSpec](ValueSet-ch-elm-results-lis-spec.md),[ChElmResultsMalOrg](ValueSet-ch-elm-results-mal-org.md),[ChElmResultsMaldiTofOrg](ValueSet-ch-elm-results-maldi-tof-org.md),[ChElmResultsMeaOrg](ValueSet-ch-elm-results-mea-org.md),[ChElmResultsMenOrg](ValueSet-ch-elm-results-men-org.md),[ChElmResultsMpoxOrg](ValueSet-ch-elm-results-mpox-org.md),[ChElmResultsMpxCtng](ValueSet-ch-elm-results-mpx-ctng.md),[ChElmResultsMpxSash](ValueSet-ch-elm-results-mpx-sash.md),[ChElmResultsMpxSashec](ValueSet-ch-elm-results-mpx-sashec.md),[ChElmResultsPneuOrg](ValueSet-ch-elm-results-pneu-org.md),[ChElmResultsSalOrg](ValueSet-ch-elm-results-sal-org.md),[ChElmResultsSalOrgComplete](ValueSet-ch-elm-results-sal-org-complete.md),[ChElmResultsShiOrg](ValueSet-ch-elm-results-shi-org.md),[ChElmResultsSterileSpec](ValueSet-ch-elm-results-sterile-spec.md),[ChElmResultsSuscToComponentCode](ConceptMap-ch-elm-results-susc-to-component-code.md),[ChElmResultsSuscToComponentInterpretationCode](ConceptMap-ch-elm-results-susc-to-component-interpretation-code.md),[ChElmResultsSuscToComponentObservationProfile](ConceptMap-ch-elm-results-susc-to-component-observation-profile.md),[ChElmResultsToFophPatientNameRepresentation](ConceptMap-ch-elm-results-to-foph-patient-name-representation.md),[ChElmResultsToInterpretationCode](ConceptMap-ch-elm-results-to-interpretation-code.md),[ChElmResultsToObservationProfile](ConceptMap-ch-elm-results-to-observation-profile.md),[ChElmResultsTubGenOrg](ValueSet-ch-elm-results-tub-gen-org.md),[ChElmResultsTubOrg](ValueSet-ch-elm-results-tub-org.md),[ChElmResultsTubSpec](ValueSet-ch-elm-results-tub-spec.md),[ChElmResultsTulOrg](ValueSet-ch-elm-results-tul-org.md),[ChElmResultsVirusCultOrg](ValueSet-ch-elm-results-virus-cult-org.md),[ChElmServicePreviousRequestLaboratoryOrder](StructureDefinition-ch-elm-servicerequest-previous-laboratory-order.md),[ChElmServiceRequestLaboratoryOrder](StructureDefinition-ch-elm-servicerequest-laboratory-order.md),[ChElmSpecimen](StructureDefinition-ch-elm-specimen.md),[ChElmStatus](ValueSet-ch-elm-status.md),[ChExtElmStatus](StructureDefinition-ch-ext-elm-status.md),[DocumentReference/1-DocumentReferenceStrict](DocumentReference-1-DocumentReferenceStrict.md),[DocumentReference/1c-DocumentReferenceStrict](DocumentReference-1c-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReference](DocumentReference-2-DocumentReference.md),[DocumentReference/2-DocumentReferenceStrict](DocumentReference-2-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReferenceVctStrict](DocumentReference-2-DocumentReferenceVctStrict.md),[DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md),[DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md),[DocumentReference/Publish-4Doc-Campylobacter](DocumentReference-Publish-4Doc-Campylobacter.md),[DocumentReference/Publish-5Doc-TreponemaPallidum](DocumentReference-Publish-5Doc-TreponemaPallidum.md),[DocumentReference/Publish-6Doc-Influenza](DocumentReference-Publish-6Doc-Influenza.md),[DocumentReference/Publish-7Doc-SARSCoV2](DocumentReference-Publish-7Doc-SARSCoV2.md),[FindDocumentReferencesResponse](StructureDefinition-FindDocumentReferencesResponse.md),[IDN](NamingSystem-IDN.md),[IdnIdentifier](StructureDefinition-ch-elm-idn-identifier.md),[Patient/Pat-001](Patient-Pat-001.md),[Patient/Pat-003](Patient-Pat-003.md),[Patient/Pat-004](Patient-Pat-004.md),[Patient/Pat-005](Patient-Pat-005.md),[Patient/Pat-006](Patient-Pat-006.md),[Patient/Pat-007](Patient-Pat-007.md),[Patient/Pat-VCT](Patient-Pat-VCT.md),[PublishDocumentReference](StructureDefinition-PublishDocumentReference.md),[PublishDocumentReferenceResponse](StructureDefinition-PublishDocumentReferenceResponse.md),[PublishDocumentReferenceStrict](StructureDefinition-PublishDocumentReferenceStrict.md),[Test100Kosovo](TestScript-Test100-Kosovo.md),[Test101InvalidCountryCode](TestScript-Test101-InvalidCountryCode.md),[Test92WarningBerUidGln](TestScript-Test92-WarningBerUidGln.md),[Test93ErrorFullNameInfluenca](TestScript-Test93-Error-FullName-Influenca.md),[Test94IgnoreSourceWarning](TestScript-Test94-Ignore-Source-Warning.md),[Test95IgnoreObservationInterpretationCodesWarning](TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.md),[Test96IgnoreObservationInterpretationCodesInformation](TestScript-Test96-Ignore-Slice-Patient-Eu-Lab-Information.md),[Test97CoaxiellaNoRatio](TestScript-Test97-CoaxiellaNoRatio.md),[Test98HivInvalidCode](TestScript-Test98-HivInvalidCode.md),[Test99CoaxiellaZeroDenominator](TestScript-Test99-CoaxiellaZeroDenominator.md)and[elmstatus](SearchParameter-SearchParameter-ch-elm-status.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/50Doc-HIV-viremia](Bundle-50Doc-HIV-viremia.md), [Bundle/58Doc-Coxiella](Bundle-58Doc-Coxiella.md), [Bundle/61Doc-Tb-Susceptibility](Bundle-61Doc-Tb-Susceptibility.md) and [Bundle/66Doc-HivRecency](Bundle-66Doc-HivRecency.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/10Doc-Legionella](Bundle-10Doc-Legionella.md), [Bundle/11Doc-Malaria](Bundle-11Doc-Malaria.md)...Show 105 more,[Bundle/12Doc-Mpox](Bundle-12Doc-Mpox.md),[Bundle/13Doc-Shigella](Bundle-13Doc-Shigella.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest](Bundle-14Doc-Neisseriameningitidis-confirmationtest.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest-originalorder](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md),[Bundle/15Doc-Measles-Seroconversion](Bundle-15Doc-Measles-Seroconversion.md),[Bundle/16Doc-Dengue-Titer](Bundle-16Doc-Dengue-Titer.md),[Bundle/17Doc-Neisseria](Bundle-17Doc-Neisseria.md),[Bundle/18Doc-C-diphtheriae](Bundle-18Doc-C-diphtheriae.md),[Bundle/19Doc-S-pneumoniae](Bundle-19Doc-S-pneumoniae.md),[Bundle/1Doc-NeisseriaGonorrhoeae](Bundle-1Doc-NeisseriaGonorrhoeae.md),[Bundle/1bDoc-NeisseriaGonorrhoeae](Bundle-1bDoc-NeisseriaGonorrhoeae.md),[Bundle/1cDoc-NeisseriaGonorrhoeae](Bundle-1cDoc-NeisseriaGonorrhoeae.md),[Bundle/20Doc-Vibrio-cholerae](Bundle-20Doc-Vibrio-cholerae.md),[Bundle/21Doc-HepatiteE](Bundle-21Doc-HepatiteE.md),[Bundle/22Doc-H-influenzae](Bundle-22Doc-H-influenzae.md),[Bundle/23Doc-F-tularensis](Bundle-23Doc-F-tularensis.md),[Bundle/24Doc-Chikungunya](Bundle-24Doc-Chikungunya.md),[Bundle/25Doc-Tick-borne-encephalitis](Bundle-25Doc-Tick-borne-encephalitis.md),[Bundle/26Doc-HepatiteA](Bundle-26Doc-HepatiteA.md),[Bundle/28Doc-Listeria-monocytogenes](Bundle-28Doc-Listeria-monocytogenes.md),[Bundle/29Doc-Rubella](Bundle-29Doc-Rubella.md),[Bundle/2Doc-ChlamydiaTrachomatis](Bundle-2Doc-ChlamydiaTrachomatis.md),[Bundle/2Doc-ChlamydiaTrachomatis-Vct](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md),[Bundle/30Doc-Salmonella-enteritidis](Bundle-30Doc-Salmonella-enteritidis.md),[Bundle/32Doc-Rubella-avidity](Bundle-32Doc-Rubella-avidity.md),[Bundle/33Doc-Salmonella-valueString](Bundle-33Doc-Salmonella-valueString.md),[Bundle/34Doc-Brucella](Bundle-34Doc-Brucella.md),[Bundle/35Doc-CJD](Bundle-35Doc-CJD.md),[Bundle/36Doc-Salmonella-paratyphi](Bundle-36Doc-Salmonella-paratyphi.md),[Bundle/37Doc-Zika](Bundle-37Doc-Zika.md),[Bundle/38Doc-Anthrax](Bundle-38Doc-Anthrax.md),[Bundle/39Doc-Botulims](Bundle-39Doc-Botulims.md),[Bundle/3Doc-CPE](Bundle-3Doc-CPE.md),[Bundle/40Doc-Crimean-Congo](Bundle-40Doc-Crimean-Congo.md),[Bundle/41Doc-Ebola](Bundle-41Doc-Ebola.md),[Bundle/42Doc-Lassa](Bundle-42Doc-Lassa.md),[Bundle/43Doc-Marburg](Bundle-43Doc-Marburg.md),[Bundle/44Doc-Mers-CoV](Bundle-44Doc-Mers-CoV.md),[Bundle/45Doc-Sars-CoV](Bundle-45Doc-Sars-CoV.md),[Bundle/46Doc-Yersinia-pestis](Bundle-46Doc-Yersinia-pestis.md),[Bundle/47Doc-Variola](Bundle-47Doc-Variola.md),[Bundle/48Doc-Mpox-Clade](Bundle-48Doc-Mpox-Clade.md),[Bundle/49Doc-HIV](Bundle-49Doc-HIV.md),[Bundle/4Doc-Campylobacter](Bundle-4Doc-Campylobacter.md),[Bundle/50Doc-HIV-viremia](Bundle-50Doc-HIV-viremia.md),[Bundle/51Doc-Gelbfieber](Bundle-51Doc-Gelbfieber.md),[Bundle/52Doc-Hantavirus](Bundle-52Doc-Hantavirus.md),[Bundle/53Doc-InfluenzaHxNy](Bundle-53Doc-InfluenzaHxNy.md),[Bundle/54Doc-Poliomyelitis](Bundle-54Doc-Poliomyelitis.md),[Bundle/55Doc-Tollwut](Bundle-55Doc-Tollwut.md),[Bundle/56Doc-Trichinella-spiralis](Bundle-56Doc-Trichinella-spiralis.md),[Bundle/57Doc-West-Nile](Bundle-57Doc-West-Nile.md),[Bundle/58Doc-Coxiella](Bundle-58Doc-Coxiella.md),[Bundle/59Doc-EHEC](Bundle-59Doc-EHEC.md),[Bundle/5Doc-TreponemaPallidum](Bundle-5Doc-TreponemaPallidum.md),[Bundle/61Doc-Tb-Susceptibility](Bundle-61Doc-Tb-Susceptibility.md),[Bundle/63Doc-Tb-Genotyping](Bundle-63Doc-Tb-Genotyping.md),[Bundle/65Doc-Tuberculosis](Bundle-65Doc-Tuberculosis.md),[Bundle/66Doc-HivRecency](Bundle-66Doc-HivRecency.md),[Bundle/67Doc-Emerging-Pathogen](Bundle-67Doc-Emerging-Pathogen.md),[Bundle/6Doc-Influenza](Bundle-6Doc-Influenza.md),[Bundle/7Doc-SARSCoV2](Bundle-7Doc-SARSCoV2.md),[Bundle/8Doc-HepatiteB](Bundle-8Doc-HepatiteB.md),[Bundle/9Doc-HepatiteC](Bundle-9Doc-HepatiteC.md),[ChElmComposition](StructureDefinition-ch-elm-composition.md),[ChElmCompositionStrict](StructureDefinition-ch-elm-composition-strict.md),[ChElmExpectingOrganismSpecification](ValueSet-ch-elm-expecting-organism-specification.md),[ChElmExpectingSpecimenSpecification](ValueSet-ch-elm-expecting-specimen-specification.md),[ChElmLabStudyTypes](ValueSet-ch-elm-lab-study-types.md),[ChElmObservationResultsLaboratory](StructureDefinition-ch-elm-observation-results-laboratory.md),[ChElmObservationResultsLaboratoryGenotyping](StructureDefinition-ch-elm-observation-results-laboratory-genotyping.md),[ChElmObservationResultsLaboratoryGenotypingStrict](StructureDefinition-ch-elm-observation-results-laboratory-genotyping-strict.md),[ChElmObservationResultsLaboratoryHivRecencyStrict](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md),[ChElmObservationResultsLaboratoryMicrobiology](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md),[ChElmObservationResultsLaboratoryMicrobiologyStrict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md),[ChElmObservationResultsLaboratorySusceptibility](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.md),[ChElmObservationResultsLaboratorySusceptibilityStrict](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility-strict.md),[ChElmResultsComponentAntibioticTb](ValueSet-ch-elm-results-component-antibiotic-tb.md),[ChElmResultsComponentGeneTb](ValueSet-ch-elm-results-component-gene-tb.md),[ChElmResultsLaboratoryObservation](ValueSet-ch-elm-results-laboratory-observation.md),[ChElmResultsLaboratoryObservationComplete](ValueSet-ch-elm-results-laboratory-observation-complete.md),[ChElmResultsLaboratoryObservationGeno](ValueSet-ch-elm-results-laboratory-observation-geno.md),[ChElmResultsLaboratoryObservationSusc](ValueSet-ch-elm-results-laboratory-observation-susc.md),[ChElmServiceRequestLaboratoryOrder](StructureDefinition-ch-elm-servicerequest-laboratory-order.md),[Composition/1Comp-NeisseriaGonorrhoeae](Composition-1Comp-NeisseriaGonorrhoeae.md),[Composition/1bComp-NeisseriaGonorrhoeae](Composition-1bComp-NeisseriaGonorrhoeae.md),[DiagnosticReport/1DR-NeisseriaGonorrhoeae](DiagnosticReport-1DR-NeisseriaGonorrhoeae.md),[DiagnosticReport/1bDR-NeisseriaGonorrhoeae](DiagnosticReport-1bDR-NeisseriaGonorrhoeae.md),[DiagnosticReport/1cDR-NeisseriaGonorrhoeae](DiagnosticReport-1cDR-NeisseriaGonorrhoeae.md),[DocumentReference/1-DocumentReferenceStrict](DocumentReference-1-DocumentReferenceStrict.md),[DocumentReference/1c-DocumentReferenceStrict](DocumentReference-1c-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReference](DocumentReference-2-DocumentReference.md),[DocumentReference/2-DocumentReferenceStrict](DocumentReference-2-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReferenceVctStrict](DocumentReference-2-DocumentReferenceVctStrict.md),[DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md),[DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md),[DocumentReference/Publish-4Doc-Campylobacter](DocumentReference-Publish-4Doc-Campylobacter.md),[DocumentReference/Publish-5Doc-TreponemaPallidum](DocumentReference-Publish-5Doc-TreponemaPallidum.md),[DocumentReference/Publish-6Doc-Influenza](DocumentReference-Publish-6Doc-Influenza.md),[DocumentReference/Publish-7Doc-SARSCoV2](DocumentReference-Publish-7Doc-SARSCoV2.md),[Observation/1Obs-NeisseriaGonorrhoeae](Observation-1Obs-NeisseriaGonorrhoeae.md),[Observation/1bObs-NeisseriaGonorrhoeae](Observation-1bObs-NeisseriaGonorrhoeae.md),[ServiceRequest/1SR-Order](ServiceRequest-1SR-Order.md),[ServiceRequest/1bSR-Order](ServiceRequest-1bSR-Order.md)and[ServiceRequest/1cSR-Order](ServiceRequest-1cSR-Order.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [Bundle/10Doc-Legionella](Bundle-10Doc-Legionella.md), [Bundle/11Doc-Malaria](Bundle-11Doc-Malaria.md)...Show 121 more,[Bundle/12Doc-Mpox](Bundle-12Doc-Mpox.md),[Bundle/13Doc-Shigella](Bundle-13Doc-Shigella.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest](Bundle-14Doc-Neisseriameningitidis-confirmationtest.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest-originalorder](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md),[Bundle/15Doc-Measles-Seroconversion](Bundle-15Doc-Measles-Seroconversion.md),[Bundle/16Doc-Dengue-Titer](Bundle-16Doc-Dengue-Titer.md),[Bundle/17Doc-Neisseria](Bundle-17Doc-Neisseria.md),[Bundle/18Doc-C-diphtheriae](Bundle-18Doc-C-diphtheriae.md),[Bundle/19Doc-S-pneumoniae](Bundle-19Doc-S-pneumoniae.md),[Bundle/1Doc-NeisseriaGonorrhoeae](Bundle-1Doc-NeisseriaGonorrhoeae.md),[Bundle/1bDoc-NeisseriaGonorrhoeae](Bundle-1bDoc-NeisseriaGonorrhoeae.md),[Bundle/1cDoc-NeisseriaGonorrhoeae](Bundle-1cDoc-NeisseriaGonorrhoeae.md),[Bundle/20Doc-Vibrio-cholerae](Bundle-20Doc-Vibrio-cholerae.md),[Bundle/21Doc-HepatiteE](Bundle-21Doc-HepatiteE.md),[Bundle/22Doc-H-influenzae](Bundle-22Doc-H-influenzae.md),[Bundle/23Doc-F-tularensis](Bundle-23Doc-F-tularensis.md),[Bundle/24Doc-Chikungunya](Bundle-24Doc-Chikungunya.md),[Bundle/25Doc-Tick-borne-encephalitis](Bundle-25Doc-Tick-borne-encephalitis.md),[Bundle/26Doc-HepatiteA](Bundle-26Doc-HepatiteA.md),[Bundle/28Doc-Listeria-monocytogenes](Bundle-28Doc-Listeria-monocytogenes.md),[Bundle/29Doc-Rubella](Bundle-29Doc-Rubella.md),[Bundle/2Doc-ChlamydiaTrachomatis](Bundle-2Doc-ChlamydiaTrachomatis.md),[Bundle/2Doc-ChlamydiaTrachomatis-Vct](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md),[Bundle/30Doc-Salmonella-enteritidis](Bundle-30Doc-Salmonella-enteritidis.md),[Bundle/32Doc-Rubella-avidity](Bundle-32Doc-Rubella-avidity.md),[Bundle/33Doc-Salmonella-valueString](Bundle-33Doc-Salmonella-valueString.md),[Bundle/34Doc-Brucella](Bundle-34Doc-Brucella.md),[Bundle/35Doc-CJD](Bundle-35Doc-CJD.md),[Bundle/36Doc-Salmonella-paratyphi](Bundle-36Doc-Salmonella-paratyphi.md),[Bundle/37Doc-Zika](Bundle-37Doc-Zika.md),[Bundle/38Doc-Anthrax](Bundle-38Doc-Anthrax.md),[Bundle/39Doc-Botulims](Bundle-39Doc-Botulims.md),[Bundle/3Doc-CPE](Bundle-3Doc-CPE.md),[Bundle/40Doc-Crimean-Congo](Bundle-40Doc-Crimean-Congo.md),[Bundle/41Doc-Ebola](Bundle-41Doc-Ebola.md),[Bundle/42Doc-Lassa](Bundle-42Doc-Lassa.md),[Bundle/43Doc-Marburg](Bundle-43Doc-Marburg.md),[Bundle/44Doc-Mers-CoV](Bundle-44Doc-Mers-CoV.md),[Bundle/45Doc-Sars-CoV](Bundle-45Doc-Sars-CoV.md),[Bundle/46Doc-Yersinia-pestis](Bundle-46Doc-Yersinia-pestis.md),[Bundle/47Doc-Variola](Bundle-47Doc-Variola.md),[Bundle/48Doc-Mpox-Clade](Bundle-48Doc-Mpox-Clade.md),[Bundle/49Doc-HIV](Bundle-49Doc-HIV.md),[Bundle/4Doc-Campylobacter](Bundle-4Doc-Campylobacter.md),[Bundle/50Doc-HIV-viremia](Bundle-50Doc-HIV-viremia.md),[Bundle/51Doc-Gelbfieber](Bundle-51Doc-Gelbfieber.md),[Bundle/52Doc-Hantavirus](Bundle-52Doc-Hantavirus.md),[Bundle/53Doc-InfluenzaHxNy](Bundle-53Doc-InfluenzaHxNy.md),[Bundle/54Doc-Poliomyelitis](Bundle-54Doc-Poliomyelitis.md),[Bundle/55Doc-Tollwut](Bundle-55Doc-Tollwut.md),[Bundle/56Doc-Trichinella-spiralis](Bundle-56Doc-Trichinella-spiralis.md),[Bundle/57Doc-West-Nile](Bundle-57Doc-West-Nile.md),[Bundle/58Doc-Coxiella](Bundle-58Doc-Coxiella.md),[Bundle/59Doc-EHEC](Bundle-59Doc-EHEC.md),[Bundle/5Doc-TreponemaPallidum](Bundle-5Doc-TreponemaPallidum.md),[Bundle/61Doc-Tb-Susceptibility](Bundle-61Doc-Tb-Susceptibility.md),[Bundle/63Doc-Tb-Genotyping](Bundle-63Doc-Tb-Genotyping.md),[Bundle/65Doc-Tuberculosis](Bundle-65Doc-Tuberculosis.md),[Bundle/66Doc-HivRecency](Bundle-66Doc-HivRecency.md),[Bundle/67Doc-Emerging-Pathogen](Bundle-67Doc-Emerging-Pathogen.md),[Bundle/6Doc-Influenza](Bundle-6Doc-Influenza.md),[Bundle/7Doc-SARSCoV2](Bundle-7Doc-SARSCoV2.md),[Bundle/8Doc-HepatiteB](Bundle-8Doc-HepatiteB.md),[Bundle/9Doc-HepatiteC](Bundle-9Doc-HepatiteC.md),[ChElmComposition](StructureDefinition-ch-elm-composition.md),[ChElmCompositionStrict](StructureDefinition-ch-elm-composition-strict.md),[ChElmInterpretationCodesAvidity](ValueSet-ch-elm-interpretation-codes-avidity.md),[ChElmInterpretationCodesSero](ValueSet-ch-elm-interpretation-codes-sero.md),[ChElmLabStudyTypes](ValueSet-ch-elm-lab-study-types.md),[ChElmObservationResultsLaboratory](StructureDefinition-ch-elm-observation-results-laboratory.md),[ChElmObservationResultsLaboratoryHivRecencyStrict](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md),[ChElmObservationResultsLaboratoryMicrobiology](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md),[ChElmObservationResultsLaboratoryMicrobiologyStrict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md),[ChElmResultsBruOrg](ValueSet-ch-elm-results-bru-org.md),[ChElmResultsCampDiarOrg](ValueSet-ch-elm-results-camp-diar-org.md),[ChElmResultsCampOrg](ValueSet-ch-elm-results-camp-org.md),[ChElmResultsCholOrg](ValueSet-ch-elm-results-chol-org.md),[ChElmResultsCjdOrg](ValueSet-ch-elm-results-cjd-org.md),[ChElmResultsCodedValuesLaboratory](ValueSet-ch-elm-results-coded-values-laboratory.md),[ChElmResultsCompleteSpec](ValueSet-ch-elm-results-complete-spec.md),[ChElmResultsComponentHivRecency](ValueSet-ch-elm-results-component-hiv-recency.md),[ChElmResultsDiphOrg](ValueSet-ch-elm-results-diph-org.md),[ChElmResultsGeniSpec](ValueSet-ch-elm-results-geni-spec.md),[ChElmResultsHaemOrg](ValueSet-ch-elm-results-haem-org.md),[ChElmResultsHantaOrg](ValueSet-ch-elm-results-hanta-org.md),[ChElmResultsInfluenzaHxnyOrg](ValueSet-ch-elm-results-influenza-hxny-org.md),[ChElmResultsLaboratoryObservation](ValueSet-ch-elm-results-laboratory-observation.md),[ChElmResultsLaboratoryObservationComplete](ValueSet-ch-elm-results-laboratory-observation-complete.md),[ChElmResultsLegOrg](ValueSet-ch-elm-results-leg-org.md),[ChElmResultsLisOrg](ValueSet-ch-elm-results-lis-org.md),[ChElmResultsLisSpec](ValueSet-ch-elm-results-lis-spec.md),[ChElmResultsMalOrg](ValueSet-ch-elm-results-mal-org.md),[ChElmResultsMaldiTofOrg](ValueSet-ch-elm-results-maldi-tof-org.md),[ChElmResultsMeaOrg](ValueSet-ch-elm-results-mea-org.md),[ChElmResultsMenOrg](ValueSet-ch-elm-results-men-org.md),[ChElmResultsMpoxOrg](ValueSet-ch-elm-results-mpox-org.md),[ChElmResultsPneuOrg](ValueSet-ch-elm-results-pneu-org.md),[ChElmResultsSalOrg](ValueSet-ch-elm-results-sal-org.md),[ChElmResultsSalOrgComplete](ValueSet-ch-elm-results-sal-org-complete.md),[ChElmResultsShiOrg](ValueSet-ch-elm-results-shi-org.md),[ChElmResultsSterileSpec](ValueSet-ch-elm-results-sterile-spec.md),[ChElmResultsTubOrg](ValueSet-ch-elm-results-tub-org.md),[ChElmResultsTulOrg](ValueSet-ch-elm-results-tul-org.md),[ChElmResultsVirusCultOrg](ValueSet-ch-elm-results-virus-cult-org.md),[ChElmServiceRequestLaboratoryOrder](StructureDefinition-ch-elm-servicerequest-laboratory-order.md),[ChElmSpecimen](StructureDefinition-ch-elm-specimen.md),[Composition/1Comp-NeisseriaGonorrhoeae](Composition-1Comp-NeisseriaGonorrhoeae.md),[Composition/1bComp-NeisseriaGonorrhoeae](Composition-1bComp-NeisseriaGonorrhoeae.md),[DocumentReference/1-DocumentReferenceStrict](DocumentReference-1-DocumentReferenceStrict.md),[DocumentReference/1c-DocumentReferenceStrict](DocumentReference-1c-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReference](DocumentReference-2-DocumentReference.md),[DocumentReference/2-DocumentReferenceStrict](DocumentReference-2-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReferenceVctStrict](DocumentReference-2-DocumentReferenceVctStrict.md),[DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md),[DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md),[DocumentReference/Publish-4Doc-Campylobacter](DocumentReference-Publish-4Doc-Campylobacter.md),[DocumentReference/Publish-5Doc-TreponemaPallidum](DocumentReference-Publish-5Doc-TreponemaPallidum.md),[DocumentReference/Publish-6Doc-Influenza](DocumentReference-Publish-6Doc-Influenza.md),[DocumentReference/Publish-7Doc-SARSCoV2](DocumentReference-Publish-7Doc-SARSCoV2.md),[Observation/1Obs-NeisseriaGonorrhoeae](Observation-1Obs-NeisseriaGonorrhoeae.md)and[Observation/1bObs-NeisseriaGonorrhoeae](Observation-1bObs-NeisseriaGonorrhoeae.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [DataAbsentReason](http://terminology.hl7.org/6.5.0/CodeSystem-data-absent-reason.html): [Bundle/14Doc-Neisseriameningitidis-confirmationtest](Bundle-14Doc-Neisseriameningitidis-confirmationtest.md), [Bundle/14Doc-Neisseriameningitidis-confirmationtest-originalorder](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md)...Show 34 more,[Bundle/15Doc-Measles-Seroconversion](Bundle-15Doc-Measles-Seroconversion.md),[Bundle/16Doc-Dengue-Titer](Bundle-16Doc-Dengue-Titer.md),[Bundle/18Doc-C-diphtheriae](Bundle-18Doc-C-diphtheriae.md),[Bundle/19Doc-S-pneumoniae](Bundle-19Doc-S-pneumoniae.md),[Bundle/20Doc-Vibrio-cholerae](Bundle-20Doc-Vibrio-cholerae.md),[Bundle/21Doc-HepatiteE](Bundle-21Doc-HepatiteE.md),[Bundle/22Doc-H-influenzae](Bundle-22Doc-H-influenzae.md),[Bundle/24Doc-Chikungunya](Bundle-24Doc-Chikungunya.md),[Bundle/26Doc-HepatiteA](Bundle-26Doc-HepatiteA.md),[Bundle/28Doc-Listeria-monocytogenes](Bundle-28Doc-Listeria-monocytogenes.md),[Bundle/29Doc-Rubella](Bundle-29Doc-Rubella.md),[Bundle/32Doc-Rubella-avidity](Bundle-32Doc-Rubella-avidity.md),[Bundle/34Doc-Brucella](Bundle-34Doc-Brucella.md),[Bundle/35Doc-CJD](Bundle-35Doc-CJD.md),[Bundle/37Doc-Zika](Bundle-37Doc-Zika.md),[Bundle/38Doc-Anthrax](Bundle-38Doc-Anthrax.md),[Bundle/39Doc-Botulims](Bundle-39Doc-Botulims.md),[Bundle/3Doc-CPE](Bundle-3Doc-CPE.md),[Bundle/40Doc-Crimean-Congo](Bundle-40Doc-Crimean-Congo.md),[Bundle/41Doc-Ebola](Bundle-41Doc-Ebola.md),[Bundle/42Doc-Lassa](Bundle-42Doc-Lassa.md),[Bundle/43Doc-Marburg](Bundle-43Doc-Marburg.md),[Bundle/44Doc-Mers-CoV](Bundle-44Doc-Mers-CoV.md),[Bundle/45Doc-Sars-CoV](Bundle-45Doc-Sars-CoV.md),[Bundle/46Doc-Yersinia-pestis](Bundle-46Doc-Yersinia-pestis.md),[Bundle/47Doc-Variola](Bundle-47Doc-Variola.md),[Bundle/49Doc-HIV](Bundle-49Doc-HIV.md),[Bundle/51Doc-Gelbfieber](Bundle-51Doc-Gelbfieber.md),[Bundle/54Doc-Poliomyelitis](Bundle-54Doc-Poliomyelitis.md),[Bundle/55Doc-Tollwut](Bundle-55Doc-Tollwut.md),[Bundle/56Doc-Trichinella-spiralis](Bundle-56Doc-Trichinella-spiralis.md),[Bundle/59Doc-EHEC](Bundle-59Doc-EHEC.md),[Bundle/63Doc-Tb-Genotyping](Bundle-63Doc-Tb-Genotyping.md)and[Bundle/67Doc-Emerging-Pathogen](Bundle-67Doc-Emerging-Pathogen.md)
* [Observation Category Codes](http://terminology.hl7.org/6.5.0/CodeSystem-observation-category.html): [Bundle/10Doc-Legionella](Bundle-10Doc-Legionella.md), [Bundle/11Doc-Malaria](Bundle-11Doc-Malaria.md)...Show 85 more,[Bundle/12Doc-Mpox](Bundle-12Doc-Mpox.md),[Bundle/13Doc-Shigella](Bundle-13Doc-Shigella.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest](Bundle-14Doc-Neisseriameningitidis-confirmationtest.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest-originalorder](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md),[Bundle/15Doc-Measles-Seroconversion](Bundle-15Doc-Measles-Seroconversion.md),[Bundle/16Doc-Dengue-Titer](Bundle-16Doc-Dengue-Titer.md),[Bundle/17Doc-Neisseria](Bundle-17Doc-Neisseria.md),[Bundle/18Doc-C-diphtheriae](Bundle-18Doc-C-diphtheriae.md),[Bundle/19Doc-S-pneumoniae](Bundle-19Doc-S-pneumoniae.md),[Bundle/1Doc-NeisseriaGonorrhoeae](Bundle-1Doc-NeisseriaGonorrhoeae.md),[Bundle/1bDoc-NeisseriaGonorrhoeae](Bundle-1bDoc-NeisseriaGonorrhoeae.md),[Bundle/1cDoc-NeisseriaGonorrhoeae](Bundle-1cDoc-NeisseriaGonorrhoeae.md),[Bundle/20Doc-Vibrio-cholerae](Bundle-20Doc-Vibrio-cholerae.md),[Bundle/21Doc-HepatiteE](Bundle-21Doc-HepatiteE.md),[Bundle/22Doc-H-influenzae](Bundle-22Doc-H-influenzae.md),[Bundle/23Doc-F-tularensis](Bundle-23Doc-F-tularensis.md),[Bundle/24Doc-Chikungunya](Bundle-24Doc-Chikungunya.md),[Bundle/25Doc-Tick-borne-encephalitis](Bundle-25Doc-Tick-borne-encephalitis.md),[Bundle/26Doc-HepatiteA](Bundle-26Doc-HepatiteA.md),[Bundle/28Doc-Listeria-monocytogenes](Bundle-28Doc-Listeria-monocytogenes.md),[Bundle/29Doc-Rubella](Bundle-29Doc-Rubella.md),[Bundle/2Doc-ChlamydiaTrachomatis](Bundle-2Doc-ChlamydiaTrachomatis.md),[Bundle/2Doc-ChlamydiaTrachomatis-Vct](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md),[Bundle/30Doc-Salmonella-enteritidis](Bundle-30Doc-Salmonella-enteritidis.md),[Bundle/32Doc-Rubella-avidity](Bundle-32Doc-Rubella-avidity.md),[Bundle/33Doc-Salmonella-valueString](Bundle-33Doc-Salmonella-valueString.md),[Bundle/34Doc-Brucella](Bundle-34Doc-Brucella.md),[Bundle/35Doc-CJD](Bundle-35Doc-CJD.md),[Bundle/36Doc-Salmonella-paratyphi](Bundle-36Doc-Salmonella-paratyphi.md),[Bundle/37Doc-Zika](Bundle-37Doc-Zika.md),[Bundle/38Doc-Anthrax](Bundle-38Doc-Anthrax.md),[Bundle/39Doc-Botulims](Bundle-39Doc-Botulims.md),[Bundle/3Doc-CPE](Bundle-3Doc-CPE.md),[Bundle/40Doc-Crimean-Congo](Bundle-40Doc-Crimean-Congo.md),[Bundle/41Doc-Ebola](Bundle-41Doc-Ebola.md),[Bundle/42Doc-Lassa](Bundle-42Doc-Lassa.md),[Bundle/43Doc-Marburg](Bundle-43Doc-Marburg.md),[Bundle/44Doc-Mers-CoV](Bundle-44Doc-Mers-CoV.md),[Bundle/45Doc-Sars-CoV](Bundle-45Doc-Sars-CoV.md),[Bundle/46Doc-Yersinia-pestis](Bundle-46Doc-Yersinia-pestis.md),[Bundle/47Doc-Variola](Bundle-47Doc-Variola.md),[Bundle/48Doc-Mpox-Clade](Bundle-48Doc-Mpox-Clade.md),[Bundle/49Doc-HIV](Bundle-49Doc-HIV.md),[Bundle/4Doc-Campylobacter](Bundle-4Doc-Campylobacter.md),[Bundle/50Doc-HIV-viremia](Bundle-50Doc-HIV-viremia.md),[Bundle/51Doc-Gelbfieber](Bundle-51Doc-Gelbfieber.md),[Bundle/52Doc-Hantavirus](Bundle-52Doc-Hantavirus.md),[Bundle/53Doc-InfluenzaHxNy](Bundle-53Doc-InfluenzaHxNy.md),[Bundle/54Doc-Poliomyelitis](Bundle-54Doc-Poliomyelitis.md),[Bundle/55Doc-Tollwut](Bundle-55Doc-Tollwut.md),[Bundle/56Doc-Trichinella-spiralis](Bundle-56Doc-Trichinella-spiralis.md),[Bundle/57Doc-West-Nile](Bundle-57Doc-West-Nile.md),[Bundle/58Doc-Coxiella](Bundle-58Doc-Coxiella.md),[Bundle/59Doc-EHEC](Bundle-59Doc-EHEC.md),[Bundle/5Doc-TreponemaPallidum](Bundle-5Doc-TreponemaPallidum.md),[Bundle/61Doc-Tb-Susceptibility](Bundle-61Doc-Tb-Susceptibility.md),[Bundle/63Doc-Tb-Genotyping](Bundle-63Doc-Tb-Genotyping.md),[Bundle/65Doc-Tuberculosis](Bundle-65Doc-Tuberculosis.md),[Bundle/66Doc-HivRecency](Bundle-66Doc-HivRecency.md),[Bundle/67Doc-Emerging-Pathogen](Bundle-67Doc-Emerging-Pathogen.md),[Bundle/6Doc-Influenza](Bundle-6Doc-Influenza.md),[Bundle/7Doc-SARSCoV2](Bundle-7Doc-SARSCoV2.md),[Bundle/8Doc-HepatiteB](Bundle-8Doc-HepatiteB.md),[Bundle/9Doc-HepatiteC](Bundle-9Doc-HepatiteC.md),[ChElmObservationResultsLaboratory](StructureDefinition-ch-elm-observation-results-laboratory.md),[ChElmObservationResultsLaboratoryGenotyping](StructureDefinition-ch-elm-observation-results-laboratory-genotyping.md),[ChElmObservationResultsLaboratoryGenotypingStrict](StructureDefinition-ch-elm-observation-results-laboratory-genotyping-strict.md),[ChElmObservationResultsLaboratoryHivRecencyStrict](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md),[ChElmObservationResultsLaboratoryMicrobiology](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md),[ChElmObservationResultsLaboratoryMicrobiologyStrict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md),[ChElmObservationResultsLaboratorySusceptibility](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.md),[ChElmObservationResultsLaboratorySusceptibilityStrict](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility-strict.md),[DocumentReference/1-DocumentReferenceStrict](DocumentReference-1-DocumentReferenceStrict.md),[DocumentReference/1c-DocumentReferenceStrict](DocumentReference-1c-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReference](DocumentReference-2-DocumentReference.md),[DocumentReference/2-DocumentReferenceStrict](DocumentReference-2-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReferenceVctStrict](DocumentReference-2-DocumentReferenceVctStrict.md),[DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md),[DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md),[DocumentReference/Publish-4Doc-Campylobacter](DocumentReference-Publish-4Doc-Campylobacter.md),[DocumentReference/Publish-5Doc-TreponemaPallidum](DocumentReference-Publish-5Doc-TreponemaPallidum.md),[DocumentReference/Publish-6Doc-Influenza](DocumentReference-Publish-6Doc-Influenza.md),[DocumentReference/Publish-7Doc-SARSCoV2](DocumentReference-Publish-7Doc-SARSCoV2.md),[Observation/1Obs-NeisseriaGonorrhoeae](Observation-1Obs-NeisseriaGonorrhoeae.md)and[Observation/1bObs-NeisseriaGonorrhoeae](Observation-1bObs-NeisseriaGonorrhoeae.md)
* [Test script operation code](http://terminology.hl7.org/6.5.0/CodeSystem-testscript-operation-codes.html): [Test100Kosovo](TestScript-Test100-Kosovo.md), [Test101InvalidCountryCode](TestScript-Test101-InvalidCountryCode.md)...Show 8 more,[Test92WarningBerUidGln](TestScript-Test92-WarningBerUidGln.md),[Test93ErrorFullNameInfluenca](TestScript-Test93-Error-FullName-Influenca.md),[Test94IgnoreSourceWarning](TestScript-Test94-Ignore-Source-Warning.md),[Test95IgnoreObservationInterpretationCodesWarning](TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.md),[Test96IgnoreObservationInterpretationCodesInformation](TestScript-Test96-Ignore-Slice-Patient-Eu-Lab-Information.md),[Test97CoaxiellaNoRatio](TestScript-Test97-CoaxiellaNoRatio.md),[Test98HivInvalidCode](TestScript-Test98-HivInvalidCode.md)and[Test99CoaxiellaZeroDenominator](TestScript-Test99-CoaxiellaZeroDenominator.md)
* [identifierType](http://terminology.hl7.org/6.5.0/CodeSystem-v2-0203.html): [ChElmPatient](StructureDefinition-ch-elm-patient.md), [ChElmPatientHIV](StructureDefinition-ChElmPatientHIV.md), [ChElmPatientInitials](StructureDefinition-ChElmPatientInitials.md) and [ChElmPatientVCT](StructureDefinition-ChElmPatientVCT.md)
* [ObservationInterpretation](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ObservationInterpretation.html): [Bundle/10Doc-Legionella](Bundle-10Doc-Legionella.md), [Bundle/11Doc-Malaria](Bundle-11Doc-Malaria.md)...Show 77 more,[Bundle/12Doc-Mpox](Bundle-12Doc-Mpox.md),[Bundle/13Doc-Shigella](Bundle-13Doc-Shigella.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest](Bundle-14Doc-Neisseriameningitidis-confirmationtest.md),[Bundle/14Doc-Neisseriameningitidis-confirmationtest-originalorder](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md),[Bundle/16Doc-Dengue-Titer](Bundle-16Doc-Dengue-Titer.md),[Bundle/17Doc-Neisseria](Bundle-17Doc-Neisseria.md),[Bundle/18Doc-C-diphtheriae](Bundle-18Doc-C-diphtheriae.md),[Bundle/19Doc-S-pneumoniae](Bundle-19Doc-S-pneumoniae.md),[Bundle/1Doc-NeisseriaGonorrhoeae](Bundle-1Doc-NeisseriaGonorrhoeae.md),[Bundle/1bDoc-NeisseriaGonorrhoeae](Bundle-1bDoc-NeisseriaGonorrhoeae.md),[Bundle/1cDoc-NeisseriaGonorrhoeae](Bundle-1cDoc-NeisseriaGonorrhoeae.md),[Bundle/20Doc-Vibrio-cholerae](Bundle-20Doc-Vibrio-cholerae.md),[Bundle/21Doc-HepatiteE](Bundle-21Doc-HepatiteE.md),[Bundle/22Doc-H-influenzae](Bundle-22Doc-H-influenzae.md),[Bundle/23Doc-F-tularensis](Bundle-23Doc-F-tularensis.md),[Bundle/24Doc-Chikungunya](Bundle-24Doc-Chikungunya.md),[Bundle/25Doc-Tick-borne-encephalitis](Bundle-25Doc-Tick-borne-encephalitis.md),[Bundle/26Doc-HepatiteA](Bundle-26Doc-HepatiteA.md),[Bundle/28Doc-Listeria-monocytogenes](Bundle-28Doc-Listeria-monocytogenes.md),[Bundle/2Doc-ChlamydiaTrachomatis](Bundle-2Doc-ChlamydiaTrachomatis.md),[Bundle/2Doc-ChlamydiaTrachomatis-Vct](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md),[Bundle/30Doc-Salmonella-enteritidis](Bundle-30Doc-Salmonella-enteritidis.md),[Bundle/33Doc-Salmonella-valueString](Bundle-33Doc-Salmonella-valueString.md),[Bundle/34Doc-Brucella](Bundle-34Doc-Brucella.md),[Bundle/35Doc-CJD](Bundle-35Doc-CJD.md),[Bundle/36Doc-Salmonella-paratyphi](Bundle-36Doc-Salmonella-paratyphi.md),[Bundle/37Doc-Zika](Bundle-37Doc-Zika.md),[Bundle/38Doc-Anthrax](Bundle-38Doc-Anthrax.md),[Bundle/39Doc-Botulims](Bundle-39Doc-Botulims.md),[Bundle/3Doc-CPE](Bundle-3Doc-CPE.md),[Bundle/40Doc-Crimean-Congo](Bundle-40Doc-Crimean-Congo.md),[Bundle/41Doc-Ebola](Bundle-41Doc-Ebola.md),[Bundle/42Doc-Lassa](Bundle-42Doc-Lassa.md),[Bundle/43Doc-Marburg](Bundle-43Doc-Marburg.md),[Bundle/44Doc-Mers-CoV](Bundle-44Doc-Mers-CoV.md),[Bundle/45Doc-Sars-CoV](Bundle-45Doc-Sars-CoV.md),[Bundle/46Doc-Yersinia-pestis](Bundle-46Doc-Yersinia-pestis.md),[Bundle/47Doc-Variola](Bundle-47Doc-Variola.md),[Bundle/48Doc-Mpox-Clade](Bundle-48Doc-Mpox-Clade.md),[Bundle/49Doc-HIV](Bundle-49Doc-HIV.md),[Bundle/4Doc-Campylobacter](Bundle-4Doc-Campylobacter.md),[Bundle/50Doc-HIV-viremia](Bundle-50Doc-HIV-viremia.md),[Bundle/51Doc-Gelbfieber](Bundle-51Doc-Gelbfieber.md),[Bundle/52Doc-Hantavirus](Bundle-52Doc-Hantavirus.md),[Bundle/53Doc-InfluenzaHxNy](Bundle-53Doc-InfluenzaHxNy.md),[Bundle/54Doc-Poliomyelitis](Bundle-54Doc-Poliomyelitis.md),[Bundle/55Doc-Tollwut](Bundle-55Doc-Tollwut.md),[Bundle/56Doc-Trichinella-spiralis](Bundle-56Doc-Trichinella-spiralis.md),[Bundle/57Doc-West-Nile](Bundle-57Doc-West-Nile.md),[Bundle/58Doc-Coxiella](Bundle-58Doc-Coxiella.md),[Bundle/59Doc-EHEC](Bundle-59Doc-EHEC.md),[Bundle/5Doc-TreponemaPallidum](Bundle-5Doc-TreponemaPallidum.md),[Bundle/61Doc-Tb-Susceptibility](Bundle-61Doc-Tb-Susceptibility.md),[Bundle/63Doc-Tb-Genotyping](Bundle-63Doc-Tb-Genotyping.md),[Bundle/65Doc-Tuberculosis](Bundle-65Doc-Tuberculosis.md),[Bundle/67Doc-Emerging-Pathogen](Bundle-67Doc-Emerging-Pathogen.md),[Bundle/6Doc-Influenza](Bundle-6Doc-Influenza.md),[Bundle/7Doc-SARSCoV2](Bundle-7Doc-SARSCoV2.md),[Bundle/8Doc-HepatiteB](Bundle-8Doc-HepatiteB.md),[Bundle/9Doc-HepatiteC](Bundle-9Doc-HepatiteC.md),[ChElmInterpretationCodesPos](ValueSet-ch-elm-interpretation-codes-pos.md),[ChElmInterpretationCodesPosNeg](ValueSet-ch-elm-interpretation-codes-pos-neg.md),[ChElmInterpretationCodesResSus](ValueSet-ch-elm-interpretation-codes-res.md),[ChElmInterpretationCodesTiter](ValueSet-ch-elm-interpretation-codes-titer.md),[DocumentReference/1-DocumentReferenceStrict](DocumentReference-1-DocumentReferenceStrict.md),[DocumentReference/1c-DocumentReferenceStrict](DocumentReference-1c-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReference](DocumentReference-2-DocumentReference.md),[DocumentReference/2-DocumentReferenceStrict](DocumentReference-2-DocumentReferenceStrict.md),[DocumentReference/2-DocumentReferenceVctStrict](DocumentReference-2-DocumentReferenceVctStrict.md),[DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md),[DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md),[DocumentReference/Publish-4Doc-Campylobacter](DocumentReference-Publish-4Doc-Campylobacter.md),[DocumentReference/Publish-5Doc-TreponemaPallidum](DocumentReference-Publish-5Doc-TreponemaPallidum.md),[DocumentReference/Publish-6Doc-Influenza](DocumentReference-Publish-6Doc-Influenza.md),[DocumentReference/Publish-7Doc-SARSCoV2](DocumentReference-Publish-7Doc-SARSCoV2.md),[Observation/1Obs-NeisseriaGonorrhoeae](Observation-1Obs-NeisseriaGonorrhoeae.md)and[Observation/1bObs-NeisseriaGonorrhoeae](Observation-1bObs-NeisseriaGonorrhoeae.md)
* [RoleCode](http://terminology.hl7.org/6.5.0/CodeSystem-v3-RoleCode.html): [ChElmPatient](StructureDefinition-ch-elm-patient.md), [ChElmPatientHIV](StructureDefinition-ChElmPatientHIV.md), [ChElmPatientInitials](StructureDefinition-ChElmPatientInitials.md) and [ChElmPatientVCT](StructureDefinition-ChElmPatientVCT.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-elm.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-elm.r4b)](package.r4b.tgz) are available.

### Dependencies

#### Dependency Overview

This overview illustrates the relevant dependencies of CH ELM to the [Swiss implementation guides](https://fhir.ch/) and the [European laboratory project](https://build.fhir.org/ig/hl7-eu/laboratory/branches/master/index.html).

![](ig-dependencies.png)

*Fig. 1: Dependency Overview*

#### Dependency Table












### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-elm",
  "url" : "http://fhir.ch/ig/ch-elm/ImplementationGuide/ch.fhir.ig.ch-elm",
  "version" : "1.13.0",
  "name" : "CH_ELM",
  "title" : "CH ELM (R4)",
  "status" : "active",
  "date" : "2025-11-25",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "FHIR® Implementation Guide for the Electronic Laboratory Report of the Swiss Federal Office of Public Health",
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
  "packageId" : "ch.fhir.ig.ch-elm",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7_terminology_r4",
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "6.3.0"
    },
    {
      "id" : "hl7_fhir_eu_laboratory",
      "uri" : "http://hl7.eu/fhir/laboratory/ImplementationGuide/hl7.fhir.eu.laboratory",
      "packageId" : "hl7.fhir.eu.laboratory",
      "version" : "0.1.1"
    },
    {
      "id" : "hl7_fhir_uv_ips",
      "uri" : "http://hl7.org/fhir/uv/ips/ImplementationGuide/hl7.fhir.uv.ips",
      "packageId" : "hl7.fhir.uv.ips",
      "version" : "1.1.0"
    },
    {
      "id" : "ch_fhir_ig_ch_lab_report",
      "uri" : "http://fhir.ch/ig/ch-lab-report/ImplementationGuide/ch.fhir.ig.ch-lab-report",
      "packageId" : "ch.fhir.ig.ch-lab-report",
      "version" : "2.0.0-ballot"
    },
    {
      "id" : "ch_fhir_ig_ch_core",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0-ballot"
    },
    {
      "id" : "hl7_fhir_uv_extensions_r4",
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2023+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Bundle/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Composition/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "DiagnosticReport/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "DocumentReference/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Observation/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Organization/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Patient/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Practitioner/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "PractitionerRole/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "ServiceRequest/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Specimen/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.840.1.113883.6.316"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.129.1.5.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-term/ValueSet/bfs-country-codes"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-elm/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2023+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Bundle/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Composition/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "DiagnosticReport/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "DocumentReference/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Observation/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Organization/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Patient/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Practitioner/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "PractitionerRole/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "ServiceRequest/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "no-narrative"
          },
          {
            "url" : "value",
            "valueString" : "Specimen/*"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.840.1.113883.6.316"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.10"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:2.16.756.5.30.1.129.1.5.1"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-term/ValueSet/bfs-country-codes"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-elm/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1cDoc-NeisseriaGonorrhoeae"
        },
        "name" : "1 Doc - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Document: Laboratory Report (where the 'Lab' is the same as the 'Author')",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/10Doc-Legionella"
        },
        "name" : "10Doc - Legionella",
        "description" : "Example Document for Legionella",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/11Doc-Malaria"
        },
        "name" : "11Doc - Malaria",
        "description" : "Example Document for Malaria",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/12Doc-Mpox"
        },
        "name" : "12Doc - Mpox",
        "description" : "Example Document for Mpox",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/13Doc-Shigella"
        },
        "name" : "13Doc - Shigella",
        "description" : "Example Document for Shigella",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/14Doc-Neisseriameningitidis-confirmationtest"
        },
        "name" : "14Doc - Neisseria meningitidis - confirmation test",
        "description" : "Example Document for a confirmation test of Neisseria meningitidis by secondary lab (reference laboratory)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/14Doc-Neisseriameningitidis-confirmationtest-originalorder"
        },
        "name" : "14Doc - Neisseria meningitidis - confirmation test with original order",
        "description" : "Example Document for a confirmation test of Neisseria meningitidis by secondary lab (reference laboratory) with original order information",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/15Doc-Measles-Seroconversion"
        },
        "name" : "15Doc - Measles Seroconversion",
        "description" : "Example Document Measles Seroconversion",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/16Doc-Dengue-Titer"
        },
        "name" : "16Doc - Dengue Titer",
        "description" : "Example Document Dengue with high IgG Ab-Titer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/17Doc-Neisseria"
        },
        "name" : "17Doc - Neisseria meningitidis – microscopic finding",
        "description" : "Example Document for a microscopic observation of Neisseria meningitidis by primary lab",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/18Doc-C-diphtheriae"
        },
        "name" : "18Doc - Corynebacterium diphtheriae",
        "description" : "Example Document for Corynebacterium diphtheriae with specimen specification",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/19Doc-S-pneumoniae"
        },
        "name" : "19Doc - Streptococcus pneumoniae",
        "description" : "Example Document for Streptococcus pneumoniae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/1bComp-NeisseriaGonorrhoeae"
        },
        "name" : "1bComp - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Composition: Laboratory Report",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1bDoc-NeisseriaGonorrhoeae"
        },
        "name" : "1bDoc - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Document: Laboratory Report (where the 'Lab' is NOT the same as the 'Author' -> Broker Scenario)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/1bDR-NeisseriaGonorrhoeae"
        },
        "name" : "1bDR - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM DiagnosticReport: Laboratory Report",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/1bObs-NeisseriaGonorrhoeae"
        },
        "name" : "1bObs - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Observation Results: Laboratory",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiolgy-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/1bOrg-Broker"
        },
        "name" : "1bOrg - Broker",
        "description" : "Example for a CH ELM Organization: Author",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-author"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/1bOrg-Labor"
        },
        "name" : "1bOrg - Labor",
        "description" : "Example for a CH ELM Organization: Lab",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Specimen"
          }
        ],
        "reference" : {
          "reference" : "Specimen/1bSpec-Specimen"
        },
        "name" : "1bSpec - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Specimen: Laboratory",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/1bSR-Order"
        },
        "name" : "1bSR - Order",
        "description" : "Example for a CH ELM ServiceRequest: Laboratory Order",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-laboratory-order"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/1cDR-NeisseriaGonorrhoeae"
        },
        "name" : "1cDR - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM DiagnosticReport: Laboratory Report",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/1Comp-NeisseriaGonorrhoeae"
        },
        "name" : "1Comp - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Composition: Laboratory Report",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/1cSR-Order"
        },
        "name" : "1cSR - Order",
        "description" : "Example for a CH ELM ServiceRequest: Laboratory Order",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-laboratory-order"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/1Doc-NeisseriaGonorrhoeae"
        },
        "name" : "1Doc - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Document: Laboratory Report (where the 'Lab' is the same as the 'Author')",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DiagnosticReport"
          }
        ],
        "reference" : {
          "reference" : "DiagnosticReport/1DR-NeisseriaGonorrhoeae"
        },
        "name" : "1DR - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM DiagnosticReport: Laboratory Report",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-diagnosticreport"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/1Obs-NeisseriaGonorrhoeae"
        },
        "name" : "1Obs - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Observation Results: Laboratory",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiolgy-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/1Org-KsAbc"
        },
        "name" : "1Org - Kantonsspital ABC",
        "description" : "Example for a CH ELM Organization: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/1Org-Labor"
        },
        "name" : "1Org - Labor",
        "description" : "Example for a CH ELM Organization: Lab and Author",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Pat-001"
        },
        "name" : "1Pat - DM",
        "description" : "Example for a CH ELM Patient (only with initials)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/1PR-KsAbc"
        },
        "name" : "1PR - Monika Giacometti @ Kantonsspital ABC",
        "description" : "Example for a CH ELM PractitionerRole: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/1cPR-KsAbc"
        },
        "name" : "1PR - Monika Giacometti @ Kantonsspital ABC",
        "description" : "Example for a CH ELM PractitionerRole: Orderer where the organization is not known, only the prtactitioner",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/1cPract-KsAbc"
        },
        "name" : "1Pract - Giacometti",
        "description" : "Example for a CH ELM Practitioner: Orderer where only the name, plz and city is known",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/1Pract-KsAbc"
        },
        "name" : "1Pract - Monika Giacometti",
        "description" : "Example for a CH ELM Practitioner: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Specimen"
          }
        ],
        "reference" : {
          "reference" : "Specimen/1Spec-Specimen"
        },
        "name" : "1Spec - Neisseria Gonorrhoeae",
        "description" : "Example for a CH ELM Specimen: Laboratory",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/1SR-Order"
        },
        "name" : "1SR - Order",
        "description" : "Example for a CH ELM ServiceRequest: Laboratory Order",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-servicerequest-laboratory-order"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/20Doc-Vibrio-cholerae"
        },
        "name" : "20Doc - Vibrio cholerae",
        "description" : "Example Document for Vibrio cholerae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/21Doc-HepatiteE"
        },
        "name" : "21Doc - Hepatite E",
        "description" : "Example Document for Hepatite E",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/22Doc-H-influenzae"
        },
        "name" : "22Doc - Haemophilus influenzae",
        "description" : "Example Document for Haemophilus influenzae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/23Doc-F-tularensis"
        },
        "name" : "23Doc - Francisella tularensis with organism specification",
        "description" : "Example Document for Francisella tularensis with organism specification",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/24Doc-Chikungunya"
        },
        "name" : "24Doc - Chikungunya fever",
        "description" : "Example Document for Chikungunya fever",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/25Doc-Tick-borne-encephalitis"
        },
        "name" : "25Doc - Tick-borne encephalitis",
        "description" : "Example Document for Tick-borne encephalitis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/26Doc-HepatiteA"
        },
        "name" : "26Doc - Hepatite A",
        "description" : "Example Document for Hepatite A",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/28Doc-Listeria-monocytogenes"
        },
        "name" : "28Doc - Listeria monocytogenes",
        "description" : "Example Document for Listeria monocytogenes",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/29Doc-Rubella"
        },
        "name" : "29Doc - Rubella",
        "description" : "Example Document for Rubella",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2Doc-ChlamydiaTrachomatis"
        },
        "name" : "2Doc - Chlamydia Trachomatis",
        "description" : "Example for a CH ELM Document: Laboratory Report (collection material in addition to the leading LOINC code, with references/fullUrls as UUIDs)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/2Doc-ChlamydiaTrachomatis-Vct"
        },
        "name" : "2Doc - Chlamydia Trachomatis (VCT)",
        "description" : "Example for a CH ELM Document: Laboratory Report collection material in addition to the leading LOINC code and Patient with Patient VCT code",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/30Doc-Salmonella-enteritidis"
        },
        "name" : "30Doc - Salmonella enteritidis",
        "description" : "Example Document for Salmonella enteritidis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/32Doc-Rubella-avidity"
        },
        "name" : "32Doc - Rubella avidity",
        "description" : "Example Document for reporting a rubella avidity",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/33Doc-Salmonella-valueString"
        },
        "name" : "33Doc - Salmonella valueString",
        "description" : "Example Document for Salmonella reporting a (new) serotype for which no coding exists",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/34Doc-Brucella"
        },
        "name" : "34Doc - Brucella",
        "description" : "Example Document for Brucella",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/35Doc-CJD"
        },
        "name" : "35Doc CJD",
        "description" : "Example Document for Creutzfeldt-Jakob disease",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/36Doc-Salmonella-paratyphi"
        },
        "name" : "36Doc - Salmonella paratyphi",
        "description" : "Example Document for Salmonella paratyphi",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/37Doc-Zika"
        },
        "name" : "37Doc - Zika",
        "description" : "Example Document for Zika",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/38Doc-Anthrax"
        },
        "name" : "38Doc - Anthrax",
        "description" : "Example Document for Bacillus anthracis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/39Doc-Botulims"
        },
        "name" : "39Doc - Botulism",
        "description" : "Example Document for Clostridium botulinum",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/40Doc-Crimean-Congo"
        },
        "name" : "40Doc - Crimean-Congo",
        "description" : "Example Document for Crimean-congo virus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/41Doc-Ebola"
        },
        "name" : "41Doc - Ebola",
        "description" : "Example Document for Ebola virus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/42Doc-Lassa"
        },
        "name" : "42Doc - Lassa",
        "description" : "Example Document for Lassa virus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/43Doc-Marburg"
        },
        "name" : "43Doc - Marburg",
        "description" : "Example Document for Marburg virus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/44Doc-Mers-CoV"
        },
        "name" : "44Doc - MERS-CoV",
        "description" : "Example Document for MERS coronavirus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/45Doc-Sars-CoV"
        },
        "name" : "45Doc - SARS-CoV",
        "description" : "Example Document for Sars coronavirus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/46Doc-Yersinia-pestis"
        },
        "name" : "46Doc - Yersinia pestis",
        "description" : "Example Document for Yersinia pestis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/47Doc-Variola"
        },
        "name" : "47Doc - Variola",
        "description" : "Example Document for Variola",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/48Doc-Mpox-Clade"
        },
        "name" : "48Doc - Mpox Clade",
        "description" : "Example Document for Mpox Clade",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/49Doc-HIV"
        },
        "name" : "49Doc - HIV",
        "description" : "Example Document for HIV",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/4Doc-Campylobacter"
        },
        "name" : "4Doc - Campylobacter coli",
        "description" : "Example for a CH ELM Document: Laboratory Report",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/50Doc-HIV-viremia"
        },
        "name" : "50Doc - HIV-viremia",
        "description" : "Example Document for reporting a physical quantity value",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/51Doc-Gelbfieber"
        },
        "name" : "51Doc - Gelbfieber",
        "description" : "Example Document for Yellow fever-virus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/52Doc-Hantavirus"
        },
        "name" : "52Doc - Hantavirus",
        "description" : "Example Document for Hanta-virus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/53Doc-InfluenzaHxNy"
        },
        "name" : "53Doc - Influenza HxNy",
        "description" : "Example Document for Influenza A virus reporting a specific subtype",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/54Doc-Poliomyelitis"
        },
        "name" : "54Doc - Poliomyelitis",
        "description" : "Example Document for Polio",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/55Doc-Tollwut"
        },
        "name" : "55Doc - Tollwut",
        "description" : "Example Document for Rabies-virus",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/56Doc-Trichinella-spiralis"
        },
        "name" : "56Doc - Trichinella spiralis",
        "description" : "Example Document for Trichinella",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/57Doc-West-Nile"
        },
        "name" : "57Doc - West Nile",
        "description" : "Example Document for West-Nile-Fever-virus using an organism-specification code",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/58Doc-Coxiella"
        },
        "name" : "58Doc - Coxiella",
        "description" : "Example Document for reporting titer ratio",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/59Doc-EHEC"
        },
        "name" : "59Doc - EHEC",
        "description" : "Example Document for reporting EHEC toxin",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/5Doc-TreponemaPallidum"
        },
        "name" : "5Doc - Treponema pallidum",
        "description" : "Example for a CH ELM Document: Laboratory Report (SNOMED CT as leading code)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/61Doc-Tb-Susceptibility"
        },
        "name" : "61Doc - Tuberculosis Susceptibility",
        "description" : "Example document for reporting microbial susceptibility pannels (antibiograms)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/63Doc-Tb-Genotyping"
        },
        "name" : "63Doc - Tuberculosis Genotyping",
        "description" : "Example document for reporting genotyping analysis (resistance mutation)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/65Doc-Tuberculosis"
        },
        "name" : "65Doc-Tuberculosis",
        "description" : "Example document for reporting mycobacterium culture",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/66Doc-HivRecency"
        },
        "name" : "66Doc - HIV Recency",
        "description" : "Example document for HIV Recency",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/67Doc-Emerging-Pathogen"
        },
        "name" : "67Doc-Emerging-Pathogen",
        "description" : "Example document for FOPH emerging pathogen reporting",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/6Doc-Influenza"
        },
        "name" : "6Doc - Influenza",
        "description" : "Example for a CH ELM Document: Laboratory Report",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/7Doc-SARSCoV2"
        },
        "name" : "7Doc - SARS-CoV-2",
        "description" : "Example for a CH ELM Document: Laboratory Report (document in French, patient with full name)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/8Doc-HepatiteB"
        },
        "name" : "8Doc - HepatiteB",
        "description" : "Document for Hepatite B",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/9Doc-HepatiteC"
        },
        "name" : "9Doc - HepatiteC",
        "description" : "Example Document for Hepatite C",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/bfs-country-codes"
        },
        "name" : "BFS Verzeichnis der Staaten und Gebiete",
        "description" : "BFS defines the valid country codes in Switzerland",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/3Doc-CPE"
        },
        "name" : "Carbapenemase-producing Enterobacteriaceae",
        "description" : "Example Document for reporting Carbapenemase-producing Enterobacteriaceae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-codeableconcept"
        },
        "name" : "CH ELM CodeableConcept",
        "description" : "This profile represents the constraint applied to the CodeableConcept data type by this IG to use the 'CH ELM CodeableConcept' data type profile.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-coding"
        },
        "name" : "CH ELM Coding",
        "description" : "This profile represents the constraints applied to the Coding data type by this IG used in the 'CH ELM Coding' data type profile.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-composition"
        },
        "name" : "CH ELM Composition: Laboratory Report",
        "description" : "This CH ELM base profile constrains the Composition resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-composition-strict"
        },
        "name" : "CH ELM Composition: Laboratory Report Strict",
        "description" : "This CH ELM Composition profile constrains that the section codes have corresponding observation value codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-diagnosticreport"
        },
        "name" : "CH ELM DiagnosticReport: Laboratory Report",
        "description" : "This CH ELM base profile constrains the DiagnosticReport resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-document"
        },
        "name" : "CH ELM Document: Laboratory Report",
        "description" : "This CH ELM base profile constrains the Bundle resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-document-strict"
        },
        "name" : "CH ELM Document: Laboratory Report (strict)",
        "description" : "CH ELM profile for the Bundle resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element and checking patient name requirements if possible.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-expecting-organism-specification"
        },
        "name" : "CH ELM Expecting Organism Specification",
        "description" : "This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting organism.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-expecting-organism-specification-to-results-completion-vs"
        },
        "name" : "CH ELM Expecting Organism Specification To Results Completion Vs",
        "description" : "This CH ELM concept map shows which leading codes have to be completed by an additional code to specify the organism. The target code shows the URL of the value set containing the permitted codes for the organism specification.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-expecting-specimen-specification"
        },
        "name" : "CH ELM Expecting Specimen Specification",
        "description" : "This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting specimen.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-expecting-specimen-specification-to-results-completion-vs"
        },
        "name" : "CH ELM Expecting Specimen Specification To Results Completion Vs",
        "description" : "This CH ELM concept map shows which leading codes have to be completed by an additional code to specify the specimen. The target code shows the URL of the value set containing the permitted codes for the specimen specification.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-ext-department"
        },
        "name" : "CH ELM Extension: Department",
        "description" : "This CH ELM extension enables the representation of a department (name) of an organization directly in the resource Organization itself.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-ext-hiv-code"
        },
        "name" : "CH ELM Extension: HIV code",
        "description" : "This CH ELM extension enables to provide the HIV Code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-ext-vct-code"
        },
        "name" : "CH ELM Extension: VCT code",
        "description" : "This CH ELM extension enables to provide the VCT Code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-elm-foph-business-rules"
        },
        "name" : "CH ELM FOPH Business Rules",
        "description" : "This CH ELM code system describes specific business rules of the FOPH, which are applied during processing. Please note that the set of rules detailed herein only covers processes explicitly declared by the FOPH. Additional rules, not included in this code system, are applied by the FHIR validation logic, resulting in further codes. For more information about these additional codes, consult the official FHIR documentation and the implementation guideline.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-elm-foph-code-reserve"
        },
        "name" : "CH ELM FOPH Code Reserve",
        "description" : "This code system contains proprietary placeholder codes for use in situations of emerging pathogens for which no other code exist.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-elm-foph-patient-name-representation"
        },
        "name" : "CH ELM FOPH Patient Name Representation",
        "description" : "This CH ELM resource defines the codes which identify possible patient name schemas to be used.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-foph-patient-name-representation"
        },
        "name" : "CH ELM FOPH Patient Name Representation",
        "description" : "This CH ELM resource defines the codes which identify possible patient name schemas to be used.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-avidity"
        },
        "name" : "CH ELM Interpretation Codes AVIDITY",
        "description" : "This CH ELM value set includes the code for avidity interpretation code(s).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-pos"
        },
        "name" : "CH ELM Interpretation Codes Positive",
        "description" : "This CH ELM value set includes the code for positive interpretation code(s).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-pos-neg"
        },
        "name" : "CH ELM Interpretation Codes Positive and Negative",
        "description" : "This CH ELM value set includes the code for positive and negative interpretation code(s).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-res"
        },
        "name" : "CH ELM Interpretation Codes Resistant",
        "description" : "This CH ELM value set includes the code for resistant interpretation code(s).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-res-sus"
        },
        "name" : "CH ELM Interpretation Codes Resistant and Susceptible",
        "description" : "This CH ELM value set includes the code for resistant and susceptible interpretation code(s).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-sero"
        },
        "name" : "CH ELM Interpretation Codes SERO",
        "description" : "This CH ELM value set includes the code for sero interpretation code(s).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-titer"
        },
        "name" : "CH ELM Interpretation Codes TITER",
        "description" : "This CH ELM value set includes the code for titer interpretation code(s).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-elm-interpretation-codes-vs"
        },
        "name" : "CH ELM Interpretation Codes Vs",
        "description" : "The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted to indicate the observation interpretation in relation to the leading code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-interpretation-codes-vs"
        },
        "name" : "CH ELM Interpretation Codes Vs",
        "description" : "This CH ELM value set includes the value set URLs as interpretation codes to map in the concept maps the leading codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-lab-study-types"
        },
        "name" : "CH ELM Lab Study Types",
        "description" : "This CH ELM value set includes the codes for the laboratory specialties.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:logical"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/LaboratoryReport"
        },
        "name" : "CH ELM Laboratory Report",
        "description" : "The logical model represents the CH ELM laboratory report as an abstract data model. These data elements are defined by the ordinance of the Federal Office of Public Health (FOPH) and are then mapped to the FHIR document structure. \n\nCardinalities:\n- The cardinalities in the logical model show the so-called 'best case'. This means that if these data are available, they must be submitted to the FOPH.\n- Since in reality the data is not always available, the CH ELM profiles define which elements are required or optional.\n- See also the concept 'Must Support', which is described on the 'Home' page of this implementation guide",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-component-conc"
        },
        "name" : "CH ELM Observation Component Results: Concentration",
        "description" : "Concentration as Quantity in observation.component result, see also 'Guidance - Laboratory Result'",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-elm-observation-profile-vs"
        },
        "name" : "CH ELM Observation Profile Vs",
        "description" : "The codes contained in this code system represent URLs of Profile Observations that can be used as target codes in ConceptMaps. These profiles defines the Observation in relation to the leading code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-observation-profile-vs"
        },
        "name" : "CH ELM Observation Profile Vs",
        "description" : "This CH ELM value set includes the profile URLs as codes to map in the concept maps the leading codes, which specify how the observation value must be provided.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-laboratory-genotyping"
        },
        "name" : "CH ELM Observation Results for Genotyping",
        "description" : "This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-laboratory-genotyping-strict"
        },
        "name" : "CH ELM Observation Results for Genotyping (strict)",
        "description" : "CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-hiv-recency-strict"
        },
        "name" : "CH ELM Observation Results for HIV Recency Testing (strict)",
        "description" : "This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports for hiv recency.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-laboratory-susceptibility"
        },
        "name" : "CH ELM Observation Results for Microbial susceptibility tests",
        "description" : "This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-laboratory-susceptibility-strict"
        },
        "name" : "CH ELM Observation Results for Microbial susceptibility tests (strict)",
        "description" : "CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-laboratory-microbiology"
        },
        "name" : "CH ELM Observation Results for Microbiology studies (set)",
        "description" : "This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-laboratory-microbiolgy-strict"
        },
        "name" : "CH ELM Observation Results for Microbiology studies (set) strict",
        "description" : "CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-results-laboratory"
        },
        "name" : "CH ELM Observation Results: Laboratory",
        "description" : "This CH ELM base profile constrains the Observation resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-rto"
        },
        "name" : "CH ELM Observation Results: Ratio",
        "description" : "Ratio as observation result, see also 'Guidance - Laboratory Result'",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-txt"
        },
        "name" : "CH ELM Observation Results: Text",
        "description" : "Text as observation result, see also 'Guidance - Laboratory Result'",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-observation-pq-virl"
        },
        "name" : "CH ELM Observation Results: Viral Load",
        "description" : "Viral Load as observation result, see also 'Guidance - Laboratory Result'",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-organization-author"
        },
        "name" : "CH ELM Organization: Author",
        "description" : "This CH ELM base profile constrains the Organization resource for the author of the laboratory report.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-organization-lab"
        },
        "name" : "CH ELM Organization: Lab",
        "description" : "This CH ELM base profile constrains the Organization resource for the reporting laboratory.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-organization-orderer"
        },
        "name" : "CH ELM Organization: Orderer",
        "description" : "This CH ELM base profile constrains the Organization resource for the orderer.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-patient"
        },
        "name" : "CH ELM Patient",
        "description" : "This CH ELM base profile constrains the Patient resource for the purpose of laboratory orders and test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ChElmPatientHIV"
        },
        "name" : "CH ELM Patient HIV",
        "description" : "Patient representation for HIV",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ChElmPatientInitials"
        },
        "name" : "CH ELM Patient Initials",
        "description" : "Patient representation via Initials",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ChElmPatientVCT"
        },
        "name" : "CH ELM Patient VCT",
        "description" : "Patient representation via a VCT Code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-practitioner-orderer"
        },
        "name" : "CH ELM Practitioner: Orderer",
        "description" : "This CH ELM base profile constrains the Practitioner resource for the orderer.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-practitionerrole-orderer"
        },
        "name" : "CH ELM PractitionerRole: Orderer",
        "description" : "This profile constrains the PractitionerRole resource for the orderer: \n- orderer organization and/or practitioner must be present\n- a postalCode and city must be present from organization and/or practitioner",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-quantity-arbu"
        },
        "name" : "CH ELM Quantity arb'U",
        "description" : "Quantity with unit arb'U and system http://unitsofmeasure.org",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-component-antibiotic-tb"
        },
        "name" : "CH ELM Results Antibiotic Tb",
        "description" : "The \"ch elm results antibiotic tb\" group provides a curated set of codes representing specific antibiotics. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"ch elm results antibiotic tb\" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-bot-org"
        },
        "name" : "CH ELM Results Bot Org",
        "description" : "The \"CH ELM Results Bot Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Bot Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-bot-spec"
        },
        "name" : "CH ELM Results Bot Spec",
        "description" : "The \"CH ELM Results Bot Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Bot Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-bru-org"
        },
        "name" : "CH ELM Results Bru Org",
        "description" : "The \"CH ELM Results Bru Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Bru Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-camp-diar-org"
        },
        "name" : "CH ELM Results Camp Diar Org",
        "description" : "The \"CH ELM Results Camp Diar Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Camp Diar Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-camp-org"
        },
        "name" : "CH ELM Results Camp Org",
        "description" : "The \"CH ELM Results Camp Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Camp Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-chol-org"
        },
        "name" : "CH ELM Results Chol Org",
        "description" : "The \"CH ELM Results Chol Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Chol Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-cjd-org"
        },
        "name" : "CH ELM Results Cjd Org",
        "description" : "The \"CH ELM Results Cjd Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Cjd Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-coded-values-laboratory"
        },
        "name" : "CH ELM Results Coded Values Laboratory",
        "description" : "This CH ELM value set includes the codes for the laboratory test results (presence/absence).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-complete-spec"
        },
        "name" : "CH ELM Results Complete Spec",
        "description" : "The \"CH ELM Results Complete Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Complete Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-elm-results-completion-vs"
        },
        "name" : "CH ELM Results Completion Vs",
        "description" : "The codes contained in this code system represent URLs of value sets that can be used as target codes in ConceptMaps. These value sets define the codes that are permitted for specifying the organism or specimen in relation to the leading code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-completion-vs"
        },
        "name" : "CH ELM Results Completion Vs",
        "description" : "This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes, which must be completed with additional codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-component-antibiotic-cpe"
        },
        "name" : "CH ELM Results Component Antibiotic for CPE",
        "description" : "The \"CH ELM Results Component Antibitics\" oprovides a curated set of codes representing specific antibiotics.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-component-gene-cpe"
        },
        "name" : "CH ELM Results Component Gene CPE",
        "description" : "The \"CH ELM Results Component Gene CPE\" provides a curated set of codes representing specific genes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-elm-results-component-vs"
        },
        "name" : "CH ELM Results Component Vs",
        "description" : "This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-component-vs"
        },
        "name" : "CH ELM Results Component Vs",
        "description" : "This CH ELM value set includes the value set URLs as codes to map in the concept maps the leading codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-diph-org"
        },
        "name" : "CH ELM Results Diph Org",
        "description" : "The \"CH ELM Results Diph Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Diph Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-diph-spec"
        },
        "name" : "CH ELM Results Diph Spec",
        "description" : "The \"CH ELM Results Diph Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Diph Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-ebol-org"
        },
        "name" : "CH ELM Results Ebol Org",
        "description" : "The \"CH ELM Results Ebol Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Ebol Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-ehec-org"
        },
        "name" : "CH ELM Results Ehec Org",
        "description" : "The \"CH ELM Results Ehec Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Ehec Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-ehec-tox-org"
        },
        "name" : "CH ELM Results Ehec Tox Org",
        "description" : "The \"CH ELM Results Ehec Tox Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Ehec Tox Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-component-gene-tb"
        },
        "name" : "CH ELM Results Gene Tb",
        "description" : "The \"CH ELM Results Gene Tb\" group provides a curated set of codes representing specific genotypes. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Gene Tb\" group should refer to the provided codes to ensure they capture and report antibiotic information correctly and consistently",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-geni-spec"
        },
        "name" : "CH ELM Results Geni Spec",
        "description" : "The \"CH ELM Results Geni Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Geni Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-geno-to-component-code"
        },
        "name" : "CH ELM Results Genotype To Component Code",
        "description" : "This CH ELM concept map shows for each leading code defining genotype testing results its corresponding genotyp-valueset. The target code shows the URL of the value set containing the permitted genotype codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-geno-to-component-interpretation-code"
        },
        "name" : "CH ELM Results Genotyping To Component Interpretation Code",
        "description" : "This CH ELM concept map specifies the ValuesSet for component.code for each leading code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-haem-org"
        },
        "name" : "CH ELM Results Haem Org",
        "description" : "The \"CH ELM Results Haem Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Haem Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-hanta-org"
        },
        "name" : "CH ELM Results Hanta Org",
        "description" : "The \"CH ELM Results Hanta Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Hanta Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-hiv-org"
        },
        "name" : "CH ELM Results Hiv Org",
        "description" : "The \"CH ELM Results Hiv Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Hiv Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-component-hiv-recency"
        },
        "name" : "CH ELM Results HIV Recency",
        "description" : "The \"CH ELM Results HIV Recency\" group provides a curated set codes needed to capture and report HIV recency test results.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-inf-org"
        },
        "name" : "CH ELM Results Inf Org",
        "description" : "The \"CH ELM Results Inf Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Inf Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-influenza-hxny-org"
        },
        "name" : "CH ELM Results Influenza Hxny Org",
        "description" : "The \"CH ELM Results Influenza Hxny Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Influenza Hxny Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-laboratory-observation"
        },
        "name" : "CH ELM Results Laboratory Observation",
        "description" : "This CH ELM value set includes the codes for the laboratory test results (organism).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-laboratory-observation-complete"
        },
        "name" : "CH ELM Results Laboratory Observation Complete",
        "description" : "This CH ELM value set includes the codes for every type of laboratory test results (organism detection, genotyping, susceptibility).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-laboratory-observation-geno"
        },
        "name" : "CH ELM Results Laboratory Observation Genotyping",
        "description" : "This CH ELM value set includes the codes for the laboratory genotyping test results.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-laboratory-observation-susc"
        },
        "name" : "CH ELM Results Laboratory Observation Susceptibility",
        "description" : "This CH ELM value set includes the codes for the laboratory Susceptibility test results.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-leg-org"
        },
        "name" : "CH ELM Results Leg Org",
        "description" : "The \"CH ELM Results Leg Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Leg Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-lis-org"
        },
        "name" : "CH ELM Results Lis Org",
        "description" : "The \"CH ELM Results Lis Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Lis Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-lis-spec"
        },
        "name" : "CH ELM Results Lis Spec",
        "description" : "The \"CH ELM Results Lis Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Lis Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-mal-org"
        },
        "name" : "CH ELM Results Mal Org",
        "description" : "The \"CH ELM Results Mal Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Mal Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-maldi-tof-org"
        },
        "name" : "CH ELM Results Maldi-tof Org",
        "description" : "The \"CH ELM Results Maldi-tof Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Maldi-tof Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-mea-org"
        },
        "name" : "CH ELM Results Mea Org",
        "description" : "The \"CH ELM Results Mea Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Mea Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-men-org"
        },
        "name" : "CH ELM Results Men Org",
        "description" : "The \"CH ELM Results Men Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Men Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-mpox-org"
        },
        "name" : "CH ELM Results Mpox Org",
        "description" : "The \"CH ELM Results Mpox Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Mpox Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-mpx-ctng"
        },
        "name" : "CH ELM Results Mpx Ctng",
        "description" : "The \"CH ELM Results Mpx Ctng\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Mpx Ctng\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-mpx-sash"
        },
        "name" : "CH ELM Results Mpx Sash",
        "description" : "The \"CH ELM Results Mpx Sash\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Mpx Sash\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-mpx-sashec"
        },
        "name" : "CH ELM Results Mpx Sashec",
        "description" : "The \"CH ELM Results Mpx Sashec\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Mpx Sashec\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-pneu-org"
        },
        "name" : "CH ELM Results Pneu Org",
        "description" : "The \"CH ELM Results Pneu Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Pneu Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-sal-org"
        },
        "name" : "CH ELM Results Sal Org",
        "description" : "The \"CH ELM Results Sal Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Sal Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-sal-org-complete"
        },
        "name" : "CH ELM Results Sal Org Complete",
        "description" : "The \"CH ELM Results Sal Org Complete\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Sal Org Complete\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-shi-org"
        },
        "name" : "CH ELM Results Shi Org",
        "description" : "The \"CH ELM Results Shi Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Shi Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-sterile-spec"
        },
        "name" : "CH ELM Results Sterile Spec",
        "description" : "The \"CH ELM Results Sterile Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Sterile Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-susc-to-component-code"
        },
        "name" : "CH ELM Results Susceptibility To Component Code",
        "description" : "This CH ELM concept map shows for each leading code defining susceptibility testing results its corresponding antibiotic-valueset. The target code shows the URL of the value set containing the permitted antibiotic codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-susc-to-component-interpretation-code"
        },
        "name" : "CH ELM Results Susceptibility To Component Interpretation Code",
        "description" : "This CH ELM concept map specifies the ValuesSet for component.code for each leading code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-susc-to-component-observation-profile"
        },
        "name" : "CH ELM Results Susceptibility To Component Observation Profile",
        "description" : "This CH ELM concept map specifies the ValuesSet for component.code for each leading code.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-to-foph-patient-name-representation"
        },
        "name" : "CH ELM Results To FOPH Patient Name Representation",
        "description" : "This CH ELM concept map specifies the required mode of patient representation for each leading code. It determines whether the full name, initials, or a unique code (e.g., for HIV patients) should be used, based on the specific LOINC code associated with the laboratory data. This ensures consistent and appropriate handling of patient identity in accordance with the type of pathogen reported.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-to-interpretation-code"
        },
        "name" : "CH ELM Results To Interpretation Code",
        "description" : "This CH ELM concept map specifies the interpretation codes for each leading code. E.g. if positive, positive and negative or resistant-susceptible values are allowed",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/ch-elm-results-to-observation-profile"
        },
        "name" : "CH ELM Results To Observation Profile",
        "description" : "This CH ELM concept map specifies the observation profile for each leading code",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-tub-gen-org"
        },
        "name" : "CH ELM Results Tub Gen Org",
        "description" : "The \"CH ELM Results Tub Gen Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Tub Gen Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-tub-org"
        },
        "name" : "CH ELM Results Tub Org",
        "description" : "The \"CH ELM Results Tub Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Tub Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-tub-spec"
        },
        "name" : "CH ELM Results Tub Spec",
        "description" : "The \"CH ELM Results Tub Spec\" material group provides a curated set of codes representing specific materials. Each code within this group is selected to ensure consistency and accuracy for medical coding related to the primary LOINC codes. Clients using the \"CH ELM Results Tub Spec\" group should refer to the provided codes to ensure they capture and report material information correctly and consistently.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-tul-org"
        },
        "name" : "CH ELM Results Tul Org",
        "description" : "The \"CH ELM Results Tul Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Tul Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-results-virus-cult-org"
        },
        "name" : "CH ELM Results Virus Cult Org",
        "description" : "The \"CH ELM Results Virus Cult Org\" organism group provides a curated set of codes representing specific organisms. Each code within this group has been selected to ensure precise representation and consistency in relation to the primary LOINC codes. Clients utilizing the \"CH ELM Results Virus Cult Org\" group should refer to the provided codes to accurately and uniformly capture and report organism-related information.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-servicerequest-laboratory-order"
        },
        "name" : "CH ELM ServiceRequest: Laboratory Order",
        "description" : "This CH ELM base profile constrains the ServiceRequest resource for the purpose of laboratory orders.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-servicerequest-previous-laboratory-order"
        },
        "name" : "CH ELM ServiceRequest: Laboratory Order",
        "description" : "This CH ELM base profile constrains the ServiceRequest resource for the purpose of the previous laboratory order.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-specimen"
        },
        "name" : "CH ELM Specimen: Laboratory",
        "description" : "This CH ELM base profile constrains the Specimen resource for the purpose of laboratory test reports.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/ch-elm-status"
        },
        "name" : "CH ELM Status",
        "description" : "This CH ELM value set includes the codes for the laboratory specialities.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/PublishDocumentReferenceResponse"
        },
        "name" : "DocumentReference for  Publish Response",
        "description" : "A profile on the DocumentReference resource for the publication response: \n- must be status current\n- must have an identifier",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/PublishDocumentReference"
        },
        "name" : "DocumentReference for sending the report",
        "description" : "A profile on the DocumentReference resource with publication constraints: \n- must be status current\n- must have an identifier\n- uses attachment.url to carry the document as a contained resource\n- validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/PublishDocumentReferenceStrict"
        },
        "name" : "DocumentReference for sending the report with strict validation",
        "description" : "A profile on the DocumentReference resource with publication constraints: \n- must be status current\n- must have an identifier\n- uses attachment.url to carry the document as a contained resource\n- strict validation according to http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ex-findDocumentReferencesResponse"
        },
        "name" : "Example of a Find Document References Response Message",
        "description" : "Example of a Find Document References Bundle Search Set with a single DocumentReference",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/FindDocumentReferencesResponse"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/FindDocumentReferencesResponse"
        },
        "name" : "Find Document References Response message",
        "description" : "A profile on the Find Document References Response message",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CapabilityStatement"
          }
        ],
        "reference" : {
          "reference" : "CapabilityStatement/ch-elm-documentrecipient"
        },
        "name" : "FOPH CapabilityStatement for receiving laboratory reports",
        "description" : "CapabilityStatement for receiving laboratory reports",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-humanname"
        },
        "name" : "Human Name",
        "description" : "Name with extensions for data-absent-reason",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-elm-idn-identifier"
        },
        "name" : "IDN Identifier",
        "description" : "Identifier holding the IDN Liechtenstein. It is a 13-digit number without check digit and without special characters.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/IDN"
        },
        "name" : "IDN Liechtenstein",
        "description" : "The IDN is a unique identification number generated for each person with health insurance in Liechtenstein. \nFor more details please visit https://www.llv.li/de/privatpersonen/gesundheit-vorsorge-und-pflege/elektronisches-gesundheitsdossier/datenschutzhinweis.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Org-JeanneMoreau"
        },
        "name" : "Org - Hôpital régional soleil",
        "description" : "Example for a CH ELM Organization: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Org-PeterHauser"
        },
        "name" : "Org - Praxis Dr. Hauser",
        "description" : "Example for a CH ELM Organization: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/Organization-OrdererWithBERUIDB"
        },
        "name" : "Org: Orderer with BER and UIDB",
        "description" : "Example for a CH ELM Organization: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Pat-003"
        },
        "name" : "Pat - Antoine Dupont",
        "description" : "Example for a CH ELM Patient - full name",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Pat-004"
        },
        "name" : "Pat - E5",
        "description" : "Example for a CH ELM Patient - special case HIV/AIDS",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientHIV"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Pat-006"
        },
        "name" : "Pat - Ernst Karl Tanner",
        "description" : "Example for a CH ELM Patient - full name (and full address)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Pat-005"
        },
        "name" : "Pat - ET",
        "description" : "Example for a CH ELM Patient - initials",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Pat-007"
        },
        "name" : "Pat - Lilly Liechtenstein",
        "description" : "Example for a CH ELM Patient - IDN Liechtenstein",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Pat-VCT"
        },
        "name" : "Pat - VCT",
        "description" : "Example for a CH ELM Patient with VCT Code",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientVCT"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/PR-JeanneMoreau"
        },
        "name" : "PR - Jeanne Moreau @ Hôpital régional soleil",
        "description" : "Example for a CH ELM PractitionerRole: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/PR-PeterHauser"
        },
        "name" : "PR - Peter Hauser @ Praxis Dr. Hauser",
        "description" : "Example for a CH ELM PractitionerRole: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitionerrole-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/Pract-JeanneMoreau"
        },
        "name" : "Pract - Jeanne Moreau",
        "description" : "Example for a CH ELM Practitioner: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/Pract-PeterHauser"
        },
        "name" : "Pract - Peter Hauser",
        "description" : "Example for a CH ELM Practitioner: Orderer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-practitioner-orderer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/1c-DocumentReferenceStrict"
        },
        "name" : "Publish 1cDoc-NeisseriaGonorrhoeae (Strict)",
        "description" : "Reporting Neisseria Gonorhoeae with minimal orderer information (name, plz, city)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae"
        },
        "name" : "Publish 1Doc-NeisseriaGonorrhoeae",
        "description" : "Reporting Neisseria Gonorhoeae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/1-DocumentReferenceStrict"
        },
        "name" : "Publish 1Doc-NeisseriaGonorrhoeae (Strict)",
        "description" : "Reporting Neisseria Gonorhoeae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/2-DocumentReferenceStrict"
        },
        "name" : "Publish 2Doc-ChlamydiaTrachomatis (Strict)",
        "description" : "Reporting Chlamydia Trachomatis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/2-DocumentReference"
        },
        "name" : "Publish 2Doc-ChlamydiaTrachomatis (Strict)",
        "description" : "Reporting Chlamydia Trachomatis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct"
        },
        "name" : "Publish 2Doc-ChlamydiaTrachomatis with Patient VCT Code",
        "description" : "Reporting Chlamydia Trachomatis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/2-DocumentReferenceVctStrict"
        },
        "name" : "Publish 2Doc-ChlamydiaTrachomatis with Patient VCT Code (Strict)",
        "description" : "Reporting Chlamydia Trachomatis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/Publish-4Doc-Campylobacter"
        },
        "name" : "Publish 4Doc-Campylobacter",
        "description" : "Reporting Campylobacter coli",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/Publish-5Doc-TreponemaPallidum"
        },
        "name" : "Publish 5Doc-TreponemaPallidum",
        "description" : "Reporting Treponema pallidum",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/Publish-6Doc-Influenza"
        },
        "name" : "Publish 6Doc-Influenza",
        "description" : "Reporting Influenza",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/Publish-7Doc-SARSCoV2"
        },
        "name" : "Publish 7Doc-SARSCoV2",
        "description" : "Reporting SARSCoV2",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/1-DocumentReferenceResponseCompleted"
        },
        "name" : "Publish Response for Neisseria Gonorhoeae completed",
        "description" : "Reporting Neisseria Gonorhoeae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceResponse"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/1-DocumentReferenceResponseFailed"
        },
        "name" : "Publish Response for Neisseria Gonorhoeae failed",
        "description" : "Reporting Neisseria Gonorhoeae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceResponse"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/1-DocumentReferenceResponseInProgress"
        },
        "name" : "Publish Response for Neisseria Gonorhoeae in progress",
        "description" : "Reporting Neisseria Gonorhoeae",
        "exampleCanonical" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceResponse"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "SearchParameter"
          }
        ],
        "reference" : {
          "reference" : "SearchParameter/SearchParameter-ch-elm-status"
        },
        "name" : "SearchParameter-ch-elm-status",
        "description" : "Status of the processing of the document referenced by the DocumentReference",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-ext-elm-status"
        },
        "name" : "Status of the processing of the document",
        "description" : "Extension to define the status of the processing of the document",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/Test100-Bundle-Kosovo"
        },
        "name" : "Test100-Bundle-Kosovo",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test100-Kosovo"
        },
        "name" : "Test100-Kosovo",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/Test101-Bundle-InvalidCountryCode"
        },
        "name" : "Test101-Bundle-InvalidCountryCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test101-InvalidCountryCode"
        },
        "name" : "Test101-InvalidCountryCode",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test92-WarningBerUidGln"
        },
        "name" : "Test92 - Warning for Ber Uid and Gln",
        "description" : "Test script to verify if incorrect BerUid Gln are detected with warnings",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-resource-format",
            "valueCode" : "application/fhir+json"
          },
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/Test92-Bundle-WarningBerUidGln"
        },
        "name" : "Test92 Bundle - Bundle provoking warning for Ber Uid and Gln",
        "description" : "Test bundle to verify if incorrect BerUid Gln are detected with warnings",
        "exampleCanonical" : "http://hl7.org/fhir/StructureDefinition/Binary"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-resource-format",
            "valueCode" : "application/fhir+xml"
          },
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/Test93-DocumentReference-Error-FullName-Influenca"
        },
        "name" : "Test93 Bundle - DocumentReference with contained Bundle provoking error for full name for Influenca (must be initials)",
        "description" : "Test DocumentReference with contained Bundle provoking error for full name for Influenca (must be initials)",
        "exampleCanonical" : "http://hl7.org/fhir/StructureDefinition/Binary"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test93-Error-FullName-Influenca"
        },
        "name" : "Test93 Error if full name is provided by Influenca (should be initials)",
        "description" : "Test script to verify error if full name is provided by Influenca (must be initials)",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test94-Ignore-Source-Warning"
        },
        "name" : "Test94 - If warning is ignored for Binding for path (.+) has no source",
        "description" : "Test script to verify if warning is ignored for Binding for path (.+) has no source",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test95-Ignore-Observation-Interpretation-Codes-Warning"
        },
        "name" : "Test95-Ignore-Observation-Interpretation-Codes-Warning",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test96-Ignore-Slice-Patient-Eu-Lab-Information"
        },
        "name" : "Test96-Ignore-Slice-Patient-Eu-Lab-Information",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-resource-format",
            "valueCode" : "application/fhir+xml"
          },
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/Test97-Bundle-CoaxiellaNoRatio"
        },
        "name" : "Test97 Bundle - Coxiella without titer ratio which should raise an error",
        "description" : "Coxiella without titer ratio which should raise an error",
        "exampleCanonical" : "http://hl7.org/fhir/StructureDefinition/Binary"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test97-CoaxiellaNoRatio"
        },
        "name" : "Test97-CoaxiellaNoRatio",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test98-HivInvalidCode"
        },
        "name" : "Test98 - Verify that error for invalid hiv code is raised",
        "description" : "Test script to verify if error is raised for an invalid hiv code",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/Test98-Bundle-HivInvalidCode"
        },
        "name" : "Test98-Bundle-HivInvalidCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-resource-format",
            "valueCode" : "application/fhir+json"
          },
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Binary"
          }
        ],
        "reference" : {
          "reference" : "Binary/Test99-Bundle-CoaxiellaZeroDenominator"
        },
        "name" : "Test99 Bundle - Coxiella without zero denominator should raise an error",
        "description" : "Coxiella with zero denomiator should raise an error",
        "exampleCanonical" : "http://hl7.org/fhir/StructureDefinition/Binary"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "TestScript"
          }
        ],
        "reference" : {
          "reference" : "TestScript/Test99-CoaxiellaZeroDenominator"
        },
        "name" : "Test99-CoaxiellaZeroDenominator",
        "exampleBoolean" : true
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document.html"
            }
          ],
          "nameUrl" : "document.html",
          "title" : "FHIR Document (Bundle)",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "logical.html"
            }
          ],
          "nameUrl" : "logical.html",
          "title" : "Logical Model",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase.html"
            }
          ],
          "nameUrl" : "usecase.html",
          "title" : "Use Case",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance.html"
            }
          ],
          "nameUrl" : "guidance.html",
          "title" : "Guidance",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "api.html"
            }
          ],
          "nameUrl" : "api.html",
          "title" : "API",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "terminology.html"
            }
          ],
          "nameUrl" : "terminology.html",
          "title" : "Terminology",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "businessrules.html"
            }
          ],
          "nameUrl" : "businessrules.html",
          "title" : "Business Rules",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
